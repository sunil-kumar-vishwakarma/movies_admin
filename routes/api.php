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
Route::get('/home_page_api', [ApiHomeController::class, 'home']);
Route::post('/searchMovies', [ApiHomeController::class, 'searchMovies']);
// Route::post('/watchlist/add', [ApiHomeController::class, 'addToWatchList']);
Route::middleware('auth:api')->post('watchlist/add', [ApiHomeController::class, 'addToWatchList']);
Route::middleware('auth:api')->post('watchlist', [ApiHomeController::class, 'watchList']);
// routes/api.php
Route::middleware('auth:api')->post('/watchlist/remove', [ApiHomeController::class, 'removeFromWatchList']);
// Route::post('/watchlist', [ApiHomeController::class, 'getWatchList']);
// Route::post('/watchlist/remove', [ApiHomeController::class, 'removeFromWatchList']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
