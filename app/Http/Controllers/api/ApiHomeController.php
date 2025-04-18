<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UpcommingTvShow;
use App\Models\UpcommingVideo;
use App\Models\Video;
use App\Models\Episode;
use App\Models\TvShow;

class ApiHomeController extends Controller
{
    //

    public function home()
    {
       
        $videos = Video::all();
        $episode = Episode::all();
        $tvShow = TvShow::all();
        $upcommingTvShow = UpcommingTvShow::all();
        $upcommingVideo = UpcommingVideo::all();

        $alldata = [
            'video' =>$videos,
            'episode' =>$episode,
            'tvShow' =>$tvShow,
            'upcommingTvShow' =>$upcommingTvShow,
            'upcommingVideo' =>$upcommingVideo
        ];
        
        return response()->json([
            'status' => true,
            'message' => 'Home Video List successfully',
            'data' => $alldata
        ]);
    }
}
