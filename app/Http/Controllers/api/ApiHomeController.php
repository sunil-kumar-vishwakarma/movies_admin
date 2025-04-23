<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UpcommingTvShow;
use App\Models\UpcommingVideo;
use App\Models\Video;
use App\Models\Episode;
use App\Models\TvShow;
use App\Models\BannerModel;

class ApiHomeController extends Controller
{
    //

    // public function home()
    // {
       
    //     $videos = Video::all();
    //     $episode = Episode::all();
    //     $tvShow = TvShow::all();
    //     $upcommingTvShow = UpcommingTvShow::all();
    //     $upcommingVideo = UpcommingVideo::all();

    //     $alldata = [
    //         'video' =>$videos,
    //         'episode' =>$episode,
    //         'tvShow' =>$tvShow,
    //         'upcommingTvShow' =>$upcommingTvShow,
    //         'upcommingVideo' =>$upcommingVideo
    //     ];
        
    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Home Video List successfully',
    //         'data' => $alldata
    //     ]);
    // }

    public function home()
{
    // Dummy data based on your actual structure.
    $pages = [
        [
            "name" => "Home",
            "icon" => "assets/images/icon-video.png",
            "categories" => [
                [
                    "name" => "Slider",
                    "banner" => BannerModel::where('type','Home')->orderBy('id','desc')->get()
                ],
                [
                    "name" => "Hollywood",
                    "videos" => Video::get()
                ],
                // [
                //     "name" => "Bollywood",
                //     "videos" => Video::where('category', 'Bollywood')->get()
                // ],
                // [
                //     "name" => "Tollywood",
                //     "videos" => Video::where('category', 'Tollywood')->get()
                // ],

                
                

            ]
        ],
        [
            "name" => "Movies",
            "icon" => "assets/images/icon-video.png",
            "categories" => [
                [
                    "name" => "Slider",
                    "banner" => BannerModel::where('type','Movies')->orderBy('id','desc')->get()
                ],
                // [
                //     "name" => "Trending",
                //     "videos" => Video::where('tag', 'trending')->get()
                // ],
                [
                    "name" => "Upcoming",
                    "videos" => UpcommingVideo::get()
                ],
                // [
                //     "name" => "Classics",
                //     "videos" => Video::where('tag', 'classic')->get()
                // ],
               
                
            ]
        ],
        
        [
            "name" => "Live TV",
            "icon" => "assets/images/RRR.jpg",
            "categories" => [
                [
                    "name" => "Slider",
                    "banner" => BannerModel::where('type','Live TV')->orderBy('id','desc')->get()
                ],
                
                [
                    "name" => "Sports",
                    "videos" => TvShow::get()
                ],
                // [
                //     "name" => "News",
                //     "videos" => Video::where('category', 'News')->get()
                // ],
                [
                    "name" => "Episode",
                    "videos" => Episode::get()
                ],
                [
                    "name" => "Upcomings",
                    "videos" => UpcommingTvShow::get()
                ],
                // [
                //     "name" => "Entertainment",
                //     "videos" => Video::where('category', 'Entertainment')->get()
                // ],
            ]
            ],

        // [
        //     "name" => "Live TV",
        //     "icon" => "assets/images/RRR.jpg",
        //     "categories" => [
        //         [
        //             "name" => "Sports",
        //             "videos" => Video::where('category', 'Sports')->get()
        //         ],
        //         [
        //             "name" => "News",
        //             "videos" => Video::where('category', 'News')->get()
        //         ],
        //         [
        //             "name" => "Entertainment",
        //             "videos" => Video::where('category', 'Entertainment')->get()
        //         ],
        //     ]
        // ]

        [
            "name" => "Upcoming",
            "icon" => "assets/images/icon-video.png",
            "categories" => [
                [
                    "name" => "Slider",
                    "banner" => BannerModel::where('type','Upcoming')->orderBy('id','desc')->get()
                ],
                // [
                //     "name" => "Trending",
                //     "videos" => Video::where('tag', 'trending')->get()
                // ],
                [
                    "name" => "Upcoming",
                    "videos" => UpcommingVideo::get()
                ],
                // [
                //     "name" => "Classics",
                //     "videos" => Video::where('tag', 'classic')->get()
                // ],
               
                
            ]
        ],
    ];

    return response()->json([
        'status' => true,
        'message' => 'Home Video List successfully',
        'pages' => $pages
    ]);
}

public function homeSlider(){
    $homeBanner =  BannerModel::where('type','Home')->orderBy('id','desc')->get();

    return response()->json([
        'status' => true,
        'message' => 'Home Video List successfully',
        'pages' => $homeBanner
    ]);
}

}
