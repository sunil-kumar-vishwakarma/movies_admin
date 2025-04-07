<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function home()
    {
        return view('admin.banner.home');
    }
    public function comedy()
    {
        return view('admin.banner.comedy');
    }
    public function horror()
    {
        return view('admin.banner.horror');
    }
    public function tvshow()
    {
        return view('admin.banner.tvshow');
    }
    public function tvchannel()
    {
        return view('admin.banner.tvchannel');
    }
    public function sport()
    {
        return view('admin.banner.sport');
    }
    public function upcoming()
    {
        return view('admin.banner.upcoming');
    }

}
