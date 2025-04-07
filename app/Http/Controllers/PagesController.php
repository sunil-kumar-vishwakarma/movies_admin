<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pages()
    {
        return view('admin.pages.pages');
    }
    public function edit()
    {
        return view('admin.pages.edit');
    }

}
