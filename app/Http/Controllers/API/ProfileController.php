<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Mail\sendAPIRegisterToTechnicianMailable;
use App\Mail\sendForgotPasswordToUserMailable;
use App\Mail\RegisterToTechnicianAdminMailable;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Validator;
use Hash;
use DB;
use Image;
use App\Http\Resources\UserResource;
use jeremykenedy\LaravelRoles\Models\Role;

class ProfileController extends BaseController
{
    
    public function __construct()
    {
        $this->middleware('auth:api');
    }
   
    /**
     * profile api
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
       $data = auth('api')->user();
       $user = User::find($data->id);
       $user->image = asset('/uploads/users/'.$user->image);;
       $userData = new UserResource($user);
       return $this->sendResponse($userData, 'Profile retrieved successfully.');
    }
	
	 public function profileUpdate(Request $request)
    {
       $user_id = auth('api')->user()->id;
       $input = $request->all();
     
       $validator = Validator::make($request->all(), [
           'name' => 'required|max:255|sanitizeScripts',
           'lname' => 'nullable|max:255|sanitizeScripts',
           //'phone' => 'required|max:20|sanitizeScripts',
       ],
       [
           'name.sanitize_scripts' => 'Invalid value entered for Name field.',
           'lname.sanitize_scripts' => 'Invalid value entered for Last Name field.',
           'lname.required' => 'Last name required.',
       ]);
  
       if($validator->fails()){
          //return $this->sendError('Validation Error.', $validator->errors()); 
          $errors = $validator->errors();
          $errorMsg = '';
          if($errors->first('name'))
               $errorMsg = $errors->first('name');
          elseif($errors->first('phone'))
              $errorMsg = $errors->first('phone'); 
           
          return $this->sendError($errorMsg); 
          

       }

       $user = User::find($user_id);
       $user->name = $input['name'];
       $user->lname = $input['lname'];
	   $userData = new UserResource($user);
       $user->save();
       return $this->sendResponse($userData, 'Your profile has been update successfully.');
    }
	
	 public function profilePicUpdate(Request $request)
    {
       $user_id = auth('api')->user()->id;
       $input = $request->all();
       //print_r($input);
       //exit;
       $options['allow_img_size'] = 10;

       $validator = Validator::make($request->all(), [
        'image' => 'required|mimes:jpeg,jpg,png|max:' . ($options['allow_img_size'] * 1024),
       ],
       [
           
       ]);
  
       if($validator->fails()){
          //return $this->sendError('Validation Error.', $validator->errors()); 
          $errors = $validator->errors();
          $errorMsg = '';
          if($errors->first('image'))
               $errorMsg = $errors->first('image');
        
          return $this->sendError($errorMsg); 
          

       }

       $user = User::find($user_id);

        /** Below code for save image **/
		$destinationPath = public_path('/uploads/users/');
		$newName = $user->image;
		if ($request->hasFile('image')) {
           
			$fileName = $input['image']->getClientOriginalName();
			$file = request()->file('image');
			$fileNameArr = explode('.', $fileName);
			$fileNameExt = end($fileNameArr);
			$newName = date('His').rand() . time() . '.' . $fileNameExt;
			
			$file->move($destinationPath, $newName);
			
			$img = Image::make(public_path('/uploads/users/'.$newName));
						
            $img->resize(100, 100, function($constraint) {
				$constraint->aspectRatio();
			});
			

			$img->save(public_path('/uploads/users/thumb/'.$newName));
		}

     
       $user->image = $newName;
       $user->save();
       $success['image'] =  asset('/uploads/users/'.$user->image);

       return $this->sendResponse($success, 'Your profile image has been update successfully.');
    }

 /**
     * change password api
     *
     * @return \Illuminate\Http\Response
     */
    public function changepassword(Request $request)
    {
        //die('xvcx');

        $input = $request->all();
        $userid = Auth::guard('api')->user()->id;
        $validator = Validator::make($input, [
            'oldPassword' => 'required',
            //'password' => 'required|min:8|regex:/^(?=.*\d)(?=.*[A-Z])[\w\W]{8,}$/',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
        ],
        [
            'password.regex' => "Password contains At least one uppercase, At least one digit and At least it should have 8 characters long"
        ]);
        //$validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            //$arr = array("status" => 400, "message" => $validator->errors()->first(), "data" => array());
            $errors = $validator->errors();
            $errorMsg = '';
            if($errors->first('oldPassword'))
                $errorMsg = $errors->first('oldPassword'); 
            elseif($errors->first('password'))
                $errorMsg = $errors->first('password');  
            elseif($errors->first('confirmPassword'))
                $errorMsg = $errors->first('confirmPassword');           
 
            return $this->sendError($errorMsg);   
        } else {
            try {
                if ((Hash::check(request('oldPassword'), Auth::user()->password)) == false) {
                    return $this->sendError("The old password is incorrect.");  
                } else if ((Hash::check(request('password'), Auth::user()->password)) == true) {
                    return $this->sendError("Please enter a password which is not similar then current password.");  
                } else {
                    User::where('id', $userid)->update(['password' => Hash::make($input['password'])]);
                    //$arr = array("status" => 200, "message" => "Password updated successfully.", "data" => array());
                    $success['email'] =  Auth::user()->email;
                    return $this->sendResponse($success, 'Password has been Updated Successfully, Please login again.');
                }
            } catch (\Exception $ex) {
                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                } else {
                    $msg = $ex->getMessage();
                }
                return $this->sendError($msg); 
            }
           // return \Response::json($arr);
        }
       
    }


}