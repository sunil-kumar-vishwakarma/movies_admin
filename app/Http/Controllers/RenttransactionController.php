<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenttransactionController extends Controller
{
    public function index()
    {
        return view('admin.rent-transaction');
    }

}
