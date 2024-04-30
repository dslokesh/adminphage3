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

use jeremykenedy\LaravelRoles\Models\Role;

class RegisterController extends BaseController
{
    
   
    
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $options['allow_img_size'] = 10;
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|sanitizeScripts',
            'lname' => 'nullable|max:255|sanitizeScripts',
            'phone' => 'nullable|max:20|sanitizeScripts',
            'email' => 'required|max:255|sanitizeScripts|email|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            //'password' => 'required|max:255|sanitizeScripts|min:8|regex:/^(?=.*\d)(?=.*[A-Z])[\w\W]{8,}$/',
           'password' => 'required|max:255|sanitizeScripts|min:8',
            //'c_password' => 'required|same:password',
        ],
        [
            'name.sanitize_scripts' => 'Invalid value entered for Name field.',
            'company_id.sanitize_scripts' => 'Invalid value entered for Name field.',
            'lname.sanitize_scripts' => 'Invalid value entered for Last Name field.',
            'lname.required' => 'Last name required.',
            'company_id.required' => 'Organisation Name required.',
            'delivery_address2.sanitize_scripts' => 'Invalid value entered for delivery address 2.',
            'job_title.sanitize_scripts' => 'Invalid value entered for Job Title field.',
            'delivery_address.sanitize_scripts' => 'Invalid value entered for Delivery Address field.',
            'city.sanitize_scripts' => 'Invalid value entered for city field.',
            'country.sanitize_scripts' => 'Invalid value entered for country field.',
            'postcode.sanitize_scripts' => 'Invalid value entered for Postcode field.',
            'email.sanitize_scripts' => 'Invalid value entered for Email Address field.',
            'email.regex' => 'The email must be a valid email address.',
            'password.sanitize_scripts' => 'Invalid value entered for Password field.',
            'password.regex' => "Password contains At least one uppercase, At least one digit and At least it should have 8 characters long."
        ]);
   
        if($validator->fails()){
           //return $this->sendError('Validation Error.', $validator->errors()); 
           $errors = $validator->errors();
           $errorMsg = '';
           if($errors->first('name'))
                $errorMsg = $errors->first('name');
           elseif($errors->first('phone'))
               $errorMsg = $errors->first('phone'); 
           elseif($errors->first('email'))
               $errorMsg = $errors->first('email');               
           elseif($errors->first('password'))
               $errorMsg = $errors->first('password'); 
         
           return $this->sendError($errorMsg); 
           
        }

        $input = $request->all();
        
       // $input['image'] = $newName;
        $input['password'] = bcrypt($input['password']);
        $input['role_id'] = '10';
        $input['is_active'] = 1;
        

        //pr($input); die;
        $user = User::create($input);
        $user->attachRole(4);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        $success['lname'] =  $user->lname;
        $success['name'] =  $user->name;
        $success['email'] =  $user->email;
        
        //Mail::to($input['email'],'Registration Email')->send(new sendAPIRegisterToTechnicianMailable($input)); 

        $admin = User::where("role_id",1)->first();
        $emails = [$admin->email, $user->email];
       // Mail::to($emails,'New User Registered')->send(new RegisterToTechnicianAdminMailable($success));

        return $this->sendResponse($success, 'User has been registered successfully.');
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255|sanitizeScripts|email',
            'password' => 'required|max:255|sanitizeScripts',

        ],
        [
            'email.sanitize_scripts' => 'Invalid value entered for Email Address field.',
            'password.sanitize_scripts' => 'Invalid value entered for Password field.'
        ]);
   
        if($validator->fails()){
           //return $this->sendError('Validation Error.', $validator->errors()); 
           $errors = $validator->errors();
           $errorMsg = '';
           if($errors->first('email'))
               $errorMsg = $errors->first('email');           
           elseif($errors->first('password'))
               $errorMsg = $errors->first('password');  

            //echo $errorMsg;
           //return $this->sendError('Please enter login details correctly.');  
           return $this->sendError($errorMsg);        
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_active' => 1, 'role_id' => 10])){ 
            $user = Auth::user(); 
            $accessToken = $user->createToken('MyApp')->accessToken;

            $success['token'] =  $accessToken; 
           
            $success['name'] =  $user->name;
            $success['email'] =  $user->email;
   
            return $this->sendResponse($success, 'User login successfully.');
        }elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            return $this->sendError('Oops!  Your account is inactive.');
        }else{ 
            return $this->sendError('Invalid login details.');
        } 
    }

    /**
     * forgot password api
     *
     * @return \Illuminate\Http\Response
     */
    public function forgotpassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255|sanitizeScripts|email'
        ],
        [
            'email.sanitize_scripts' => 'Invalid value entered for Email Address field.'
        ]);
   
        if($validator->fails()){
           $errors = $validator->errors();
           $errorMsg = '';
           if($errors->first('email'))
               $errorMsg = $errors->first('email');           

           return $this->sendError($errorMsg);        
        }

        $data = $request->all();
        $admin_details = DB::table('users')->where('email', $data['email'])->get();
		//print_r($admin_details); die('test');
		if(isset($admin_details[0]->id) && !empty($admin_details[0]->id)) {

            $token = Str::random(60);
            $update_pass = DB::table('users')->where('id', $admin_details[0]->id)->update(['remember_token' => $token]);

            $success = (object)array();
            $success->email = $request->email;
            //if(Auth::attempt(['email' => $request->email]))
            /*if(Auth::attempt(['email' => $data['email']])){
                $user = Auth::user(); 
                $success['token'] =  $user->createToken('MyApp')->accessToken; 
                $success['name'] =  $user->name;
                $success['email'] =  $user->email;
            }*/
            Mail::to($data['email'],'Password Reset Link')->send(new sendForgotPasswordToUserMailable($admin_details[0], $token));

            return $this->sendResponse($success, 'Success! password reset link has been sent to your email.');
           
		} else {
            return $this->sendError('Email does not exists.');
		}
    }

    
	
	/**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function emailValidat(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255|sanitizeScripts|email',
        ],
        [
            'email.sanitize_scripts' => 'Invalid value entered for Email Address field.',
            'password.sanitize_scripts' => 'Invalid value entered for Password field.'
        ]);
   
        if($validator->fails()){
           $errors = $validator->errors();
           $errorMsg = '';
           if($errors->first('email'))
               $errorMsg = $errors->first('email');           
           return $this->sendError($errorMsg);        
        }

		$users = User::where('email', $request->email)->count();
		if($users > 0)
		{
			$errorMsg = 'This email id is already registered.';
			return $this->sendError($errorMsg);
		}
		else
		{
			$success = [];
			 return $this->sendResponse($success, '');
		}

        
    }

   

    
}