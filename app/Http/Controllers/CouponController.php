<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    // public function index()
    // {
    //     return view('admin.coupon');
    // }

    public function index()
    {
        $coupon = Coupon::all();
        
        return view('admin.coupon', compact('coupon'));
    }

    public function create()
    {
        return view('admin.coupon');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $data = $request->only(
        'name',
        'start_date',
        'end_date',
        'amount_type',
        'price',
        'is_use');

        $data['unique_id'] = rand(10000000, 99999999);

        $season =  Coupon::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Coupon added successfully.',
            'data' => $season
        ]);

     }

    public function edit(Coupon $season)
    {
        return view('season.edit', compact('season'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $season = Coupon::find($id);
        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/coupon'), $filename);
            $data['image'] = 'uploads/coupon/' . $filename;
        }

        $season->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Coupon updated successfully.',
            'data' => $season // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
        $coupon = Coupon::find($id);

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
