<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\API\CommonController;
use App\Http\Controllers\API\RegisterController;

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
Route::middleware(['auth:api'])->group(function () {
});

Route::fallback(function(){
    return response()->json(['data'=>new \stdClass(), 'message' => 'Page Not Found. If error persists, contact info@myquip.com', 'statusCode' => 404], 404);
});