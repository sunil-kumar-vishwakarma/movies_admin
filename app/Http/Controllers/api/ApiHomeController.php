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
use App\Models\WatchList;
use App\Models\Cast;
use App\Models\Producer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiHomeController extends Controller
{


    public function home()
{
    // Dummy data based on your actual structure.
    $pages = [
        [
            "name" => "Home",
            "icon" => "assets/images/icon-video.png",
            "banner" => BannerModel::orderBy('id','desc')->get(),
            "categories" => [
               
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
            "banner" => BannerModel::where('type','Movies')->orderBy('id','desc')->get(),
            "categories" => [
               
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
            "banner" => BannerModel::where('type','Live TV')->orderBy('id','desc')->get(),
            "categories" => [
               
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
            "banner" => BannerModel::where('type','Live TV')->orderBy('id','desc')->get(),
            "categories" => [
               
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


// public function search(Request $request)
// {
//     // Dummy data based on your actual structure.
//     $pages = [
//         [
//             "name" => "Home",
//             "icon" => "assets/images/icon-video.png",
//             "banner" => BannerModel::orderBy('id','desc')->get(),
//             "categories" => [
               
//                 [
//                     "name" => "Hollywood",
//                     "videos" => Video::get()
//                 ],
//                 // [
//                 //     "name" => "Bollywood",
//                 //     "videos" => Video::where('category', 'Bollywood')->get()
//                 // ],
//                 // [
//                 //     "name" => "Tollywood",
//                 //     "videos" => Video::where('category', 'Tollywood')->get()
//                 // ],

                
                

//             ]
//         ],
//         [
//             "name" => "Movies",
//             "icon" => "assets/images/icon-video.png",
//             "banner" => BannerModel::where('type','Movies')->orderBy('id','desc')->get(),
//             "categories" => [
               
//                 // [
//                 //     "name" => "Trending",
//                 //     "videos" => Video::where('tag', 'trending')->get()
//                 // ],
//                 [
//                     "name" => "Upcoming",
//                     "videos" => UpcommingVideo::get()
//                 ],
//                 // [
//                 //     "name" => "Classics",
//                 //     "videos" => Video::where('tag', 'classic')->get()
//                 // ],
               
                
//             ]
//         ],
        
//         [
//             "name" => "Live TV",
//             "icon" => "assets/images/RRR.jpg",
//             "banner" => BannerModel::where('type','Live TV')->orderBy('id','desc')->get(),
//             "categories" => [
               
//                 [
//                     "name" => "Sports",
//                     "videos" => TvShow::get()
//                 ],
//                 // [
//                 //     "name" => "News",
//                 //     "videos" => Video::where('category', 'News')->get()
//                 // ],
//                 [
//                     "name" => "Episode",
//                     "videos" => Episode::get()
//                 ],
//                 [
//                     "name" => "Upcomings",
//                     "videos" => UpcommingTvShow::get()
//                 ],
//                 // [
//                 //     "name" => "Entertainment",
//                 //     "videos" => Video::where('category', 'Entertainment')->get()
//                 // ],
//             ]
//             ],

//         // [
//         //     "name" => "Live TV",
//         //     "icon" => "assets/images/RRR.jpg",
//         //     "categories" => [
//         //         [
//         //             "name" => "Sports",
//         //             "videos" => Video::where('category', 'Sports')->get()
//         //         ],
//         //         [
//         //             "name" => "News",
//         //             "videos" => Video::where('category', 'News')->get()
//         //         ],
//         //         [
//         //             "name" => "Entertainment",
//         //             "videos" => Video::where('category', 'Entertainment')->get()
//         //         ],
//         //     ]
//         // ]

//         [
//             "name" => "Upcoming",
//             "icon" => "assets/images/icon-video.png",
//             "banner" => BannerModel::where('type','Live TV')->orderBy('id','desc')->get(),
//             "categories" => [
               
//                 // [
//                 //     "name" => "Trending",
//                 //     "videos" => Video::where('tag', 'trending')->get()
//                 // ],
//                 [
//                     "name" => "Upcoming",
//                     "videos" => UpcommingVideo::get()
//                 ],
//                 // [
//                 //     "name" => "Classics",
//                 //     "videos" => Video::where('tag', 'classic')->get()
//                 // ],
               
                
//             ]
//         ],
//     ];

//     return response()->json([
//         'status' => true,
//         'message' => 'Home Video List successfully',
//         'pages' => $pages
//     ]);
// }
public function searchMovies(Request $request)
{
    $keyword = $request->input('keyword');

    if (empty($keyword)) {
        return response()->json([
            'status' => false,
            'message' => 'Please provide a search keyword.',
            'movies' => []
        ]);
    }

    // Search movies where name is like the keyword (case-insensitive)
    $movies = Video::where('name', 'LIKE', '%' . $keyword . '%')->get();

    return response()->json([
        'status' => true,
        'message' => 'Movies fetched successfully.',
        'movies' => $movies
    ]);
}

public function addToWatchList(Request $request)
{
    // Correct way to get the authenticated user
    $user = auth::user();

    // Debugging: Check the authenticated user
    // print_r($user); die;

    // Validate video_id
    $request->validate([
        'video_id' => 'required|exists:videos,id',
    ]);

    // Check if the video is already in the watchlist for the user
    $exists = WatchList::where('user_id', $user->id)
                ->where('video_id', $request->video_id)
                ->first();

    if ($exists) {
        return response()->json([
            'status' => false,
            'message' => 'Already added to watchlist.'
        ]);
    }

    // Add the video to the watchlist
    $watchlist = WatchList::create([
        'user_id' => $user->id,
        'video_id' => $request->video_id,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Added to watchlist successfully.',
        'data' => $watchlist
    ]);
}



public function watchList(Request $request)
{
    // Get the authenticated user
    $user = auth::user();

    // If user is not authenticated, return an error
    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'User not authenticated.',
            'watchlist' => []
        ], 401);
    }

    // Get the user_id from the authenticated user
    $user_id = $user->id;

    // Fetch the watchlist items for the authenticated user and eager load both video and user details
    $watchlistItems = WatchList::where('user_id', $user_id)
                                ->with(['video', 'user']) // eager load video and user details
                                ->get();

    // If no items in the watchlist, return an empty array
    if ($watchlistItems->isEmpty()) {
        return response()->json([
            'status' => true,
            'message' => 'Your watchlist is empty.',
            'watchlist' => []
        ]);
    }

    // Prepare the watchlist array with video and user details
    $watchlist = [];

    foreach ($watchlistItems as $item) {
        $watchlist[] =$item->video;
    }

    return response()->json([
        'status' => true,
        'message' => 'Watchlist fetched successfully.',
        'user_details'=>$user,
        'watchlist' => $watchlist
    ]);
}

public function removeFromWatchList(Request $request)
{
    $user = auth::user();

    $request->validate([
        'video_id' => 'required|exists:videos,id',
    ]);
    $user_id = $user->id;
    $watchlistItem = WatchList::where('user_id', $user_id)
                        ->where('video_id', $request->video_id)
                        ->first();

    if (!$watchlistItem) {
        return response()->json([
            'status' => false,
            'message' => 'Watchlist item not found.'
        ]);
    }

    $watchlistItem->delete();

    return response()->json([
        'status' => true,
        'message' => 'Removed from watchlist successfully.'
    ]);
}


public function cast()
{
    // Get the authenticated user
    $user = auth::user();

    // If user is not authenticated, return an error
    // if (!$user) {
    //     return response()->json([
    //         'status' => false,
    //         'message' => 'User not authenticated.',
    //         'watchlist' => []
    //     ], 401);
    // }

    // // Get the user_id from the authenticated user
    // $user_id = $user->id;

    // Fetch the watchlist items for the authenticated user and eager load both video and user details
    $cast = Cast::get();

    // If no items in the watchlist, return an empty array
    if ($cast->isEmpty()) {
        return response()->json([
            'status' => true,
            'message' => 'Your cast is empty.',
            'watchlist' => []
        ]);
    }

    // Prepare the cast array with video and user details
    

    return response()->json([
        'status' => true,
        'message' => 'cast fetched successfully.',
        'user_details'=>$user,
        'castList' => $cast
    ]);
}

public function producer()
{
    // Get the authenticated user
    $user = auth::user();

    // If user is not authenticated, return an error
    // if (!$user) {
    //     return response()->json([
    //         'status' => false,
    //         'message' => 'User not authenticated.',
    //         'watchlist' => []
    //     ], 401);
    // }

    // // Get the user_id from the authenticated user
    // $user_id = $user->id;

    // Fetch the watchlist items for the authenticated user and eager load both video and user details
    $producer = Producer::get();

    // If no items in the watchlist, return an empty array
    if ($cast->isEmpty()) {
        return response()->json([
            'status' => true,
            'message' => 'Your producer is empty.',
            'watchlist' => []
        ]);
    }

    // Prepare the cast array with video and user details
    

    return response()->json([
        'status' => true,
        'message' => 'producer fetched successfully.',
        'user_details'=>$user,
        'castList' => $producer
    ]);
}
}
