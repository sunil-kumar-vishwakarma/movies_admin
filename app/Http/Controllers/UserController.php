<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('admin.user');
    }

    public function userLogin(){

        return view('frontend.register-login');
    }

    public function userLoginWithMobileOtp(){

        return view('frontend.loginWithOTP1');
    }

    public function userLoginWithVerifyOtp(){

        return view('frontend.loginWithOTP2');
    }

}
