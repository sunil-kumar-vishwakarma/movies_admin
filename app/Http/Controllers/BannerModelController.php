<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;

class BannerModelController extends Controller
{
    public function bannermodel()
    {
       $bannerModel=  BannerModel::all();
        return view('admin.bannermodel', compact('bannerModel'));
    }
    public function adsvideo()
    {
        return view('admin.adsvideo');
    }
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'image' => 'required|image',
            'upload_link' => 'required',
        ]);

        $data = $request->only('type','upload_link');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/banners'), $filename);
            $data['image'] = 'uploads/banners/' . $filename;
        }

        $bannerModel =  BannerModel::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Banner Model added successfully.',
            'data' => $bannerModel
        ]);

     }

    public function edit(BannerModel $bannersModel)
    {
        // return view('season.edit', compact('season'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string',
            // 'image' => 'required|image',
            'upload_link' => 'required',
        ]);

        $banner = BannerModel::find($id);
        $data = $request->only('type','upload_link');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/banners'), $filename);
            $data['image'] = 'uploads/banners/' . $filename;
        }

        $banner->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Banner Model updated successfully.',
            'data' => $banner // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
       
        $banners = BannerModel::find($id);
        if ($avatar->image && file_exists(public_path($avatar->image))) {
            unlink(public_path($avatar->image));
        }

        $banners->delete();
        return response()->json([
            'success' => true,
            'message' => 'BannerModel deleted.',
            'data' => $banners 
        ]);
       
    }

}
