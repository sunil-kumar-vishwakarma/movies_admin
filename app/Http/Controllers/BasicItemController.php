<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicItemController extends Controller
{
    public function index()
    {
        return view('admin.basic-item.types');
    }
    public function category()
    {
        return view('admin.basic-item.category');
    }
    public function language()
    {
        return view('admin.basic-item.language');
    }
    public function season()
    {
        return view('admin.basic-item.season');
    }
    public function avatar()
    {
        return view('admin.basic-item.avatar');
    }
}
