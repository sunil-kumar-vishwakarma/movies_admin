<?php

namespace App\Http\Controllers;
use App\Models\KidsEpisode;
use Illuminate\Http\Request;

class KidsEpisodeController extends Controller
{
    //
    public function list()
    {
        $episodes= KidsEpisode::all();
        return view('admin.kids.list', compact('episodes'));
    }

    public function addepisode()
    {
        return view('admin.kids.addepisode');
    }


    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'sname' => 'required|string|max:255',
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
        'season',
        'video_upload_type',
        'is_premium',
        'is_title',
        'is_download',
        'is_like',
        'upload_video_320_px',
        'upload_video_480_px',
        'upload_video_720_px',
        'upload_video_1080_px',
        'sub_title_type',
        'first_language_name',
        'second_language_name',
        'third_language_name',
        'first_upload_sub_title',
        'second_upload_sub_title',
        'third_upload_sub_title',
        'video_duration',
        'description',
        'landscape_image',
        'kids_id');

        if ($request->hasFile('thumbnail_image')) {
            $image = $request->file('thumbnail_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/episode'), $filename);
            $data['thumbnail_image'] = 'uploads/episode/' . $filename;
        }

        $video =  KidsEpisode::create($data);


        return redirect()->route('admin.kids.list')->with('success', 'Episode created successfully.');
    }

    public function editepisode()
    {
        return view('admin.tvshows.editepisode');
    }
}

