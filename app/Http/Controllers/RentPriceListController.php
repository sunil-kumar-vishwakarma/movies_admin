<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentPrice;

class RentPriceListController extends Controller
{
    public function index()
    {
        $rentprice = RentPrice::all();
        
        return view('admin.rent-price', compact('rentprice'));
       
    }

    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
        ]);

        $data = $request->only(
        'price',
        'android_product_package',
        'ios_product_package',
        'web_price_id');

        $rentPrice =  RentPrice::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Rent Price added successfully.',
            'data' => $rentPrice
        ]);

     }


    public function update(Request $request, $id)
    {
        $request->validate([
            'price' => 'required|string',
        
        ]);

        $rentPrice = RentPrice::find($id);
        $data = $request->only('price',
        'android_product_package',
        'ios_product_package',
        'web_price_id');

        

        $rentPrice->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Rent Price updated successfully.',
            'data' => $rentPrice // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
        $coupon = RentPrice::find($id);

        if (!$coupon) {
            return response()->json([
                'success' => false,
                'message' => 'Coupon not found.',
            ], 404);
        }

        $coupon->delete();

        return response()->json([
            'success' => true,
            'message' => 'Coupon deleted.',
            'data' => $coupon
        ]);
    }

}

