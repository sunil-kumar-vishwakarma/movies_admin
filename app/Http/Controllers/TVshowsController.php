<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TVshowsController extends Controller
{
    public function index()
    {
        return view('admin.tvshows.index');
    }

    public function list()
    {
        return view('admin.tvshows.list');
    }

    public function addepisode()
    {
        return view('admin.tvshows.addepisode');
    }

    public function edit()
    {
        return view('admin.tvshows.edit');
    }
    public function editepisode()
    {
        return view('admin.tvshows.editepisode');
    }

    public function addtvshows()
    {
        return view('admin.tvshows.add');
    }
}
