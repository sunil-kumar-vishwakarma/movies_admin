<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    public function upcoming()
    {
        return view('admin.upcoming.video');
    }

    public function addvideo()
    {
        return view('admin.upcoming.addupvideo');
    }

    public function editvideo()
    {
        return view('admin.upcoming.editvideo');
    }


    public function upcomingshow()
    {
        return view('admin.upcoming.tvshow');
    }

    public function addshow()
    {
        return view('admin.upcoming.addshow');
    }
    public function edittvshow()
    {
        return view('admin.upcoming.edittvshow');
    }

}
