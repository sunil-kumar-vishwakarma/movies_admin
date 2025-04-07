<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentPriceListController extends Controller
{
    public function index()
    {
        return view('admin.rent-price');
    }

}
