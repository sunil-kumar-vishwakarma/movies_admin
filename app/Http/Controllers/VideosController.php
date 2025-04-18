<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller
{
    public function videos()
    {
        $videos = Video::all();

        return view('admin.videos.videos', compact('videos'));
    }
    public function addvideos()
    {
        return view('admin.videos.addvideo');
    }
    // public function edit()
    // {
    //     return view('admin.videos.edit');
    // }
    public function watchtime()
    {
        return view('admin.watchtime');
    }


    public function uploadVideo320(Request $request)
    {
        $request->validate([
            'upload_video_320_px' => 'required|file|mimes:mp4,mkv,avi|max:204800' // ~200MB max
        ]);

        if ($request->hasFile('upload_video_320_px')) {
            $file = $request->file('upload_video_320_px');
            $path = $file->store('videos/320px');

            return response()->json([
                'success' => true,
                'path' => $path,
                'url' => Storage::url($path)
            ]);
        }

        return response()->json(['success' => false], 400);
    }
    public function uploadVideo480(Request $request)
    {
        $request->validate([
            'upload_video_480_px' => 'required|file|mimes:mp4,mkv,avi|max:204800' // ~200MB max
        ]);

        if ($request->hasFile('upload_video_480_px')) {
            $file = $request->file('upload_video_480_px');
            $path = $file->store('videos/480px');

            return response()->json([
                'success' => true,
                'path' => $path,
                'url' => Storage::url($path)
            ]);
        }

        return response()->json(['success' => false], 400);
    }
    public function uploadVideo720(Request $request)
    {
        $request->validate([
            'upload_video_720_px' => 'required|file|mimes:mp4,mkv,avi|max:204800' // ~200MB max
        ]);

        if ($request->hasFile('upload_video_720_px')) {
            $file = $request->file('upload_video_720_px');
            $path = $file->store('videos/720px');

            return response()->json([
                'success' => true,
                'path' => $path,
                'url' => Storage::url($path)
            ]);
        }

        return response()->json(['success' => false], 400);
    }

    public function uploadVideo1080(Request $request)
    {
        $request->validate([
            'upload_video_1080_px' => 'required|file|mimes:mp4,mkv,avi|max:204800' // ~200MB max
        ]);

        if ($request->hasFile('upload_video_1080_px')) {
            $file = $request->file('upload_video_1080_px');
            $path = $file->store('videos/1080px');

            return response()->json([
                'success' => true,
                'path' => $path,
                'url' => Storage::url($path)
            ]);
        }

        return response()->json(['success' => false], 400);
    }

    
    public function store(Request $request)
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
            'movies_name' => 'required|string',
            'thumbnail_image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('movies_name',
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

        $video =  Video::create($data);


        return redirect()->route('admin.videos.videos')->with('success', 'Video created successfully.');
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));

        
    }

    public function update(Request $request, Video $video)
    {
        $validator = Validator::make($request->all(), [
            'movies_name' => 'required|string|max:255',
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

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}