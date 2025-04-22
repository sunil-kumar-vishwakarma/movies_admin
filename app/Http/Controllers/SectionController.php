<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;
use App\Models\HomeSection;
use App\Models\ComedySection;
use App\Models\HorrorSection;
use App\Models\TvShowSection;
use App\Models\TvChannelSection;
use App\Models\SportsSection;
use App\Models\UpcomingSection;

class SectionController extends Controller
{
    public function index()
    {
        $homeSection =  HomeSection::orderBy('id','desc')->first();
        $comdySection =  ComedySection::orderBy('id','desc')->first();
        $horrorSection =  HorrorSection::orderBy('id','desc')->first();
        $tvShowSection =  TvShowSection::orderBy('id','desc')->first();
        $tvChannelSection =  TvChannelSection::orderBy('id','desc')->first();
        $sportsSection =  SportsSection::orderBy('id','desc')->first();
        $upcomingSection =  UpcomingSection::orderBy('id','desc')->first();

        return view('admin.section.index', compact('homeSection','comdySection','horrorSection','tvShowSection','tvChannelSection','sportsSection', 'upcomingSection'));
    }

    // public function store(Request $request)
    // {
        
    //     $request->validate([
    //         'title' => 'required|string',
    //     ]);

    //     $data = $request->only('title',
    //     'short_title',
    //     'video_type');

    //     $video =  HomeSection::create($data);


    //     return redirect()->route('admin.section.index')->with('success', 'Home created successfully.');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'nullable|string',
            'video_type' => 'required|string',
        ]);

        $data = $request->only('title', 'short_title', 'video_type');

        // Check if a record exists with the same video_type
        $homeSection = HomeSection::where('video_type', $data['video_type'])->first();

        if ($homeSection) {
            // Update existing record
            $homeSection->update($data);
            $message = 'Home section updated successfully.';
        } else {
            // Create new record
            HomeSection::create($data);
            $message = 'Home section created successfully.';
        }

        return redirect()->route('admin.section.index')->with('success', $message);
    }


    public function storeComedy(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required',
            'category' => 'required',
            'language' => 'required',
            'screen_layout' => 'required',
            'number_of_content' => 'required',
            'order_by_upload' => 'required',
            'order_by_like' => 'required',
            'order_by_view' => 'required',
            'premium_video' => 'required',
            'rent_video' => 'required',
            'view_all' => 'required',
        ]);

        $data = $request->only('title', 'short_title', 'category','language','screen_layout','number_of_content','order_by_upload','order_by_like','order_by_view','premium_video','rent_video','view_all');

        // Check if a record exists with the same video_type
        $homeSection = ComedySection::where('category', $data['category'])->first();

        if (!empty($homeSection)) {
            // Update existing record
            $homeSection->update($data);
            $message = 'Comedy section updated successfully.';
        } else {
            // Create new record
            ComedySection::create($data);
            $message = 'Comedy section created successfully.';
        }

        return redirect()->route('admin.section.index')->with('success', $message);
    }
    public function storeHorror(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required',
            'category' => 'required',
            'language' => 'required',
            'screen_layout' => 'required',
            'number_of_content' => 'required',
            'order_by_upload' => 'required',
            'order_by_like' => 'required',
            'order_by_view' => 'required',
            'premium_video' => 'required',
            'rent_video' => 'required',
            'view_all' => 'required',
        ]);

        $data = $request->only('title', 'short_title', 'category','language','screen_layout','number_of_content','order_by_upload','order_by_like','order_by_view','premium_video','rent_video','view_all');

        // Check if a record exists with the same video_type
        $homeSection = HorrorSection::where('category', $data['category'])->first();

        if (!empty($homeSection)) {
            // Update existing record
            $homeSection->update($data);
            $message = 'Horror section updated successfully.';
        } else {
            // Create new record
            HorrorSection::create($data);
            $message = 'Horror section created successfully.';
        }

        return redirect()->route('admin.section.index')->with('success', $message);
    }


    public function storeTvShow(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required',
            'category' => 'required',
            'language' => 'required',
            'screen_layout' => 'required',
            'number_of_content' => 'required',
            'order_by_upload' => 'required',
            'order_by_like' => 'required',
            'order_by_view' => 'required',
            'premium_video' => 'required',
            'rent_video' => 'required',
            'view_all' => 'required',
        ]);

        $data = $request->only('title',
        'short_title',
        'short_title',
        'category',
        'language',
        'screen_layout',
        'number_of_content',
        'order_by_upload',
        'order_by_like',
        'order_by_view',
        'premium_video',
        'rent_video',
        'view_all');

        // Check if a record exists with the same video_type
        $homeSection = TvShowSection::where('category', $data['category'])->first();

        if (!empty($homeSection)) {
            // Update existing record
            $homeSection->update($data);
            $message = 'Horror section updated successfully.';
        } else {
            // Create new record
            TvShowSection::create($data);
            $message = 'Horror section created successfully.';
        }

        return redirect()->route('admin.section.index')->with('success', $message);
    }

    public function storeTvChannel(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'sub_video_type'=> 'required',
            'category'=>'required',
            'channel'=>'required',
            'language' => 'required',
            'screen_layout' => 'required',
            'number_of_content' => 'required',
            'order_by_upload' => 'required',
            'order_by_like' => 'required',
            'order_by_view' => 'required',
            'rent_video' => 'required',
            'view_all' => 'required',
        ]);

        $data = $request->only('title',
        'short_title',
        'sub_video_type',
        'category',
        'language',
        'channel',
        'screen_layout',
        'number_of_content',
        'order_by_upload',
        'order_by_like',
        'order_by_view',
        'rent_video',
        'view_all',);

        // Check if a record exists with the same video_type
        $homeSection = TvChannelSection::where('category', $data['category'])->first();

        if (!empty($homeSection)) {
            // Update existing record
            $homeSection->update($data);
            $message = 'Horror section updated successfully.';
        } else {
            // Create new record
            TvChannelSection::create($data);
            $message = 'Horror section created successfully.';
        }

        return redirect()->route('admin.section.index')->with('success', $message);
    }

    public function storeSports(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required',
            'category' => 'required',
            'language' => 'required',
            'screen_layout' => 'required',
            'number_of_content' => 'required',
            'order_by_upload' => 'required',
            'order_by_like' => 'required',
            'order_by_view' => 'required',
            'premium_video' => 'required',
            'rent_video' => 'required',
            'view_all' => 'required',
        ]);

        $data = $request->only('title',
        'short_title',
        'short_title',
        'category',
        'language',
        'screen_layout',
        'number_of_content',
        'order_by_upload',
        'order_by_like',
        'order_by_view',
        'premium_video',
        'rent_video',
        'view_all');

        // Check if a record exists with the same video_type
        $homeSection = SportsSection::where('category', $data['category'])->first();

        if (!empty($homeSection)) {
            // Update existing record
            $homeSection->update($data);
            $message = 'Horror section updated successfully.';
        } else {
            // Create new record
            SportsSection::create($data);
            $message = 'Horror section created successfully.';
        }

        return redirect()->route('admin.section.index')->with('success', $message);
    }

    public function storeUpcoming(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'sub_video_type'=> 'required',
            'category'=>'required',
            'language' => 'required',
            'screen_layout' => 'required',
            'number_of_content' => 'required',
            'order_by_upload' => 'required',
            'order_by_like' => 'required',
            'order_by_view' => 'required',
            'rent_video' => 'required',
            'view_all' => 'required',
        ]);

        $data = $request->only('title',
        'short_title',
        'sub_video_type',
        'category',
        'language',
        'screen_layout',
        'number_of_content',
        'order_by_upload',
        'order_by_like',
        'order_by_view',
        'rent_video',
        'view_all',);

        // Check if a record exists with the same video_type
        $homeSection = UpcomingSection::where('category', $data['category'])->first();

        if (!empty($homeSection)) {
            // Update existing record
            $homeSection->update($data);
            $message = 'Horror section updated successfully.';
        } else {
            // Create new record
            UpcomingSection::create($data);
            $message = 'Horror section created successfully.';
        }

        return redirect()->route('admin.section.index')->with('success', $message);
    }
    
}
