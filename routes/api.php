<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\ApiUserController;
use App\Http\Controllers\api\ApiHomeController;
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

Route::post('/user/loginOrRegisterWithOtp', [ApiUserController::class, 'loginOrRegisterWithOtp']);
Route::post('/user/resend-otp', [ApiUserController::class, 'resendOtp']);

Route::post('/user/verify_otp', [ApiUserController::class, 'verifyOtp']);
Route::get('/home_api', [ApiHomeController::class, 'home']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
