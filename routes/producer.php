<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\UserController;




// Admin Login Routes

Route::get('/producer/registration', [ProducerController::class, 'producerRegistration'])->name('producer.registration');
Route::post('/producer/login', [ProducerController::class, 'producerLogin'])->name('producer.login.loginto');
Route::post('/producer/sendOtpToPhone', [ProducerController::class, 'sendOtpToPhone'])->name('producer.sendOtpToPhone');
Route::post('/producer/verify-otp', [ProducerController::class, 'verifyOtp'])->name('producer.verifyOtp');

Route::post('/producer/add', [ProducerController::class, 'store'])->name('producer.store');

Route::middleware(['auth:producer'])->group(function () {
    Route::get('/producer/producerDashboard', [ProducerController::class, 'producerDashboard'])->name('producer.producerDashboard');
});
