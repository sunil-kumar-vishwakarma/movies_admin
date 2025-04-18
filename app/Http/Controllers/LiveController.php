<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function live()
    {
        return view('admin.live.index');
    }
    public function edit()
    {
        return view('admin.live.edit');
    }
    public function addvideo()
    {
        return view('admin.live.addvideo');
    }

}
