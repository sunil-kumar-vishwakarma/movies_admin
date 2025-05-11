<?php

namespace App\Http\Controllers;
use App\Models\AdsVideo;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class AdsVideoController extends Controller
{
    //
    public function adsvideo()
    {
        $AdsVideo = AdsVideo::all();
        $category = Category::all();
        $language = Language::all();
        
        return view('admin.adsvideo', compact('AdsVideo','category','language'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
        ]);

        $data = $request->only(
        'name',
        'type',
        'upload_video',
        'category',
        'language',
        'thumbnail_image',
        'landscape_image');

        if ($request->hasFile('upload_video')) {
            $image = $request->file('upload_video');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/upload_video'), $filename);
            $data['upload_video'] = 'uploads/upload_video/' . $filename;
        }

        if ($request->hasFile('thumbnail_image')) {
            $image = $request->file('thumbnail_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/thumbnail_image'), $filename);
            $data['thumbnail_image'] = 'uploads/thumbnail_image/' . $filename;
        }

        if ($request->hasFile('landscape_image')) {
            $image = $request->file('landscape_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/landscape_image'), $filename);
            $data['landscape_image'] = 'uploads/landscape_image/' . $filename;
        }
        $AdsVideo =  AdsVideo::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Ads Video added successfully.',
            'data' => $AdsVideo
        ]);

     }


    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
        
        ]);

        $adsVideo = AdsVideo::find($id);
        // dd($adsVideo);
        $data = $request->only(
        'name',
        'type',
        'upload_video',
        'category',
        'language');
        if ($request->hasFile('upload_video')) {
            $image = $request->file('upload_video');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/upload_video'), $filename);
            $data['upload_video'] = 'uploads/upload_video/' . $filename;
        }

        if ($request->hasFile('thumbnail_image')) {
            $image = $request->file('thumbnail_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/thumbnail_image'), $filename);
            $data['thumbnail_image'] = 'uploads/thumbnail_image/' . $filename;
        }

        if ($request->hasFile('landscape_image')) {
            $image = $request->file('landscape_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/landscape_image'), $filename);
            $data['landscape_image'] = 'uploads/landscape_image/' . $filename;
        }

        $adsVideo->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Ads Video updated successfully.',
            'data' => $adsVideo // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
        $coupon = AdsVideo::find($id);

        if (!$coupon) {
            return response()->json([
                'success' => false,
                'message' => 'Ads Video not found.',
            ], 404);
        }

        $coupon->delete();

        return response()->json([
            'success' => true,
            'message' => 'Ads Video deleted.',
            'data' => $coupon
        ]);
    }

}

