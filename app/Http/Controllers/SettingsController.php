<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function system_settings()
    {
        return view('admin.system_settings');
    }
    public function panel_settings()
    {
        return view('admin.panel_settings');
    }
    public function app_settings()
    {
        return view('admin.app_settings');
    }

}
