<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\API\CommonController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProfileController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [RegisterController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);
Route::middleware(['auth:api'])->group(function () {

    Route::post('profile', [ProfileController::class, 'profile']);
    Route::post('update-profile', [ProfileController::class, 'profileUpdate']);
    Route::post('update-profile-image', [ProfileController::class, 'profilePicUpdate']);
    Route::post('change-password', [ProfileController::class, 'changepassword']);
});

Route::fallback(function(){
    return response()->json(['data'=>new \stdClass(), 'message' => 'Page Not Found. If error persists, contact info@myquip.com', 'statusCode' => 404], 404);
});