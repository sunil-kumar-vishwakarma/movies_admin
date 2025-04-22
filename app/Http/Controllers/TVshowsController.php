<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TvShow;
class TVshowsController extends Controller
{
    public function index()
    {
        $tvShow = TvShow::all();
        return view('admin.tvshows.index', compact('tvShow'));
    }

    

    public function edit()
    {
        return view('admin.tvshows.edit');
    }
   

    public function addtvshows()
    {
        return view('admin.tvshows.add');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
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
            'thumbnail_image' => 'nullable|image',
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

        $video =  TvShow::create($data);


        return redirect()->route('admin.tvshows.index')->with('success', 'TV Show created successfully.');
    }

    public function show(TvShow $video)
    {
        return view('videos.show', compact('video'));
    }

    
    public function update(Request $request, TvShow $video)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'language' => 'required|string|max:100',
            'video_duration' => 'required|string|max:50',
            'producer' => 'required|string|max:100',
            'video_upload_type' => 'required|string|max:50',
            'is_premium' => 'nullable|boolean',
            'is_title' => 'nullable|boolean',
            'is_download' => 'nullable|boolean',
            'is_rent' => 'nullable|boolean',
            'is_comment' => 'nullable|boolean',
            'is_like' => 'nullable|boolean',
            'upload_video_320_px' => 'nullable|file|mimes:mp4,mkv,avi',
            'upload_video_480_px' => 'nullable|file|mimes:mp4,mkv,avi',
            'upload_video_720_px' => 'nullable|file|mimes:mp4,mkv,avi',
            'upload_video_1080_px' => 'nullable|file|mimes:mp4,mkv,avi',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'landscape_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['_token', '_method']);

        $video->update($data);

        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(TvShow $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }

}
