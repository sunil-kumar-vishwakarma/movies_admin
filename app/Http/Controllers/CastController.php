<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    public function cast()
    {
        return view('admin.cast');
    }

}
