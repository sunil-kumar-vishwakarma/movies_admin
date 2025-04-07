<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function videos()
    {
        return view('admin.videos.videos');
    }
    public function addvideos()
    {
        return view('admin.videos.addvideo');
    }
    public function edit()
    {
        return view('admin.videos.edit');
    }
    public function watchtime()
    {
        return view('admin.watchtime');
    }

}
