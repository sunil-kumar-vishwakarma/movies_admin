<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidsController extends Controller
{
    public function kids()
    {
        return view('admin.kids.index');
    }
    public function list()
    {
        return view('admin.kids.list');
    }
    public function add()
    {
        return view('admin.kids.add');
    }
    public function edit()
    {
        return view('admin.kids.edit');
    }
    public function addepisode()
    {
        return view('admin.kids.addepisode');
    }
    public function editepisode()
    {
        return view('admin.kids.editepisode');
    }

}
