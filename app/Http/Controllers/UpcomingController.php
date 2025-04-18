<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpcommingTvShow;
use App\Models\UpcommingVideo;

class UpcomingController extends Controller
{
    public function upcoming()
    {
        $upcomingVideo = UpcommingVideo::all();
        return view('admin.upcoming.video', compact('upcomingVideo'));
    }

    public function addvideo()
    {
        return view('admin.upcoming.addupvideo');
    }

    public function storeUpcomingVideo(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'movies_name' => 'required|string|max:255',
        //     'type' => 'required|string|max:100',
        //     'category' => 'required|string|max:100',
        //     'language' => 'required|string|max:100',
        //     'video_duration' => 'required|string|max:50',
        //     'producer' => 'required|string|max:100',
        //     'video_upload_type' => 'required|string|max:50',
        //     'is_premium' => 'nullable|boolean',
        //     'is_title' => 'nullable|boolean',
        //     'is_download' => 'nullable|boolean',
        //     'is_rent' => 'nullable|boolean',
        //     'is_comment' => 'nullable|boolean',
        //     'is_like' => 'nullable|boolean',
        //     'upload_video_320_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'upload_video_480_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'upload_video_720_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'upload_video_1080_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        //     'landscape_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Handle file uploads if necessary
        // $data = $request->except(['_token']);

        // Video::create($data);


        $request->validate([
            'name' => 'required|string',
            'thumbnail_image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('name',
        'type',
        'ads_video',
        'ads_interval_video_duration',
        'category',
        'language',
        'cast',
        'video_duration',
        'release_date',
        'producer',
        'video_upload_type',
        'is_premium',
        'is_title',
        'is_download',
        'upload_video_320_px',
        'upload_video_480_px',
        'upload_video_720_px',
        'upload_video_1080_px',
        'trailer_type',
        'upload_sub_title',
        'sub_title_type',
        'first_language_name',
        'second_language_name',
        'third_language_name',
        'first_upload_sub_title',
        'second_upload_sub_title',
        'third_upload_sub_title',
        'second_video_upload_type',
        'is_rent',
        'is_comment',
        'is_like',
        'landscape_image');

        if ($request->hasFile('thumbnail_image')) {
            $image = $request->file('thumbnail_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/video'), $filename);
            $data['thumbnail_image'] = 'uploads/video/' . $filename;
        }

        $video =  UpcommingVideo::create($data);


        return redirect()->route('admin.upcoming.video')->with('success', 'Upcoming Video created successfully.');
    }

    public function editvideo()
    {
        return view('admin.upcoming.editvideo');
    }


    public function upcomingshow()
    {
       $upcomingTvShow= UpcommingTvShow::all();
        return view('admin.upcoming.tvshow', compact('upcomingTvShow'));
    }

    public function addshow()
    {
        return view('admin.upcoming.addshow');
    }

    public function storeTvShows(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'movies_name' => 'required|string|max:255',
        //     'type' => 'required|string|max:100',
        //     'category' => 'required|string|max:100',
        //     'language' => 'required|string|max:100',
        //     'video_duration' => 'required|string|max:50',
        //     'producer' => 'required|string|max:100',
        //     'video_upload_type' => 'required|string|max:50',
        //     'is_premium' => 'nullable|boolean',
        //     'is_title' => 'nullable|boolean',
        //     'is_download' => 'nullable|boolean',
        //     'is_rent' => 'nullable|boolean',
        //     'is_comment' => 'nullable|boolean',
        //     'is_like' => 'nullable|boolean',
        //     'upload_video_320_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'upload_video_480_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'upload_video_720_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'upload_video_1080_px' => 'nullable|file|mimes:mp4,mkv,avi',
        //     'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        //     'landscape_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Handle file uploads if necessary
        // $data = $request->except(['_token']);

        // Video::create($data);


        $request->validate([
            'name' => 'required|string',
            'thumbnail_image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('name',
        'type',
        'category',
        'language',
        'cast',
        'release_date',
        'producer',
        'video_upload_type',
        'is_premium',
        'is_title',
        'is_download',
        'upload_video_320_px',
        'upload_video_480_px',
        'upload_video_720_px',
        'upload_video_1080_px',
        'trailer_type',
        'upload_sub_title',
        'description',
        'first_is_premium',
        'first_is_title',
        'first_is_download',
        'is_like',
        'landscape_image',);

        if ($request->hasFile('thumbnail_image')) {
            $image = $request->file('thumbnail_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/tvshow'), $filename);
            $data['thumbnail_image'] = 'uploads/tvshow/' . $filename;
        }

        $video =  UpcommingTvShow::create($data);


        return redirect()->route('admin.upcoming.tvshow')->with('success', 'Upcoming TV Show created successfully.');
    }
    public function edittvshow()
    {
        return view('admin.upcoming.edittvshow');
    }

}
