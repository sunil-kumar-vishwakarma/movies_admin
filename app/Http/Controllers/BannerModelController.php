<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\Category;
use App\Models\VideoType;

class BannerModelController extends Controller
{
    public function bannermodel()
    {
        $categories = Category::all();
        $type = VideoType::all();
       $bannerModel=  BannerModel::all();
        return view('admin.bannermodel', compact('bannerModel','categories','type'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string',
            'image' => 'required|image',
            'upload_link' => 'required',
        ]);

        $data = $request->only('title','description','type','upload_link');

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
            'title' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string',
            // 'image' => 'required|image',
            'upload_link' => 'required',
        ]);
        // print_r($request->all());die;
        $banner = BannerModel::find($id);
        $data = $request->only('title','description','type','upload_link');

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
        if ($banners->image && file_exists(public_path($banners->image))) {
            unlink(public_path($banners->image));
        }

        $banners->delete();
        return response()->json([
            'success' => true,
            'message' => 'BannerModel deleted.',
            'data' => $banners 
        ]);
       
    }

}
