<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function package()
    {
        return view('admin.subscription.package');
    }
    public function transaction()
    {
        return view('admin.subscription.transaction');
    }
    public function payment()
    {
        return view('admin.subscription.payment');
    }

}
