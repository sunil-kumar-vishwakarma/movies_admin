<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerModelController extends Controller
{
    public function bannermodel()
    {
        return view('admin.bannermodel');
    }
    public function adsvideo()
    {
        return view('admin.adsvideo');
    }

}
