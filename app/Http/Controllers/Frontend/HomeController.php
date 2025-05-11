<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\Banner;
use App\Models\Kids;
use App\Models\TvShow;
use App\Models\Video;
use App\Models\LiveVideo;
use App\Models\UpcommingVideo;
use App\Models\UpcommingTvShow;
use App\Models\UpcomingSection;
use Illuminate\Support\Facades\Validator;
use Exception;

class HomeController extends Controller
{
    
    public function home(){

        $is_home_screen ='1';
       $kids = Kids::get();
       $tvShow = TvShow::get();
    //    $video = Video::where('type', 'Movies')->get();
        $video = Video::orderBy('id','desc')->get();
    $query = Banner::where('is_home_screen', $is_home_screen);
    $banner_data = $query->latest()->get();
            $banner = [];
         foreach ($banner_data as $item) {
                $data = null;
                $subvideo_type = $item->subvideo_type ?? 0;

                if ($item->video_type) {
                    $data = Video::where('id', $item->video_id)
                        ->first();
                } elseif ($item->video_type == 2) {
                    $data = TVShow::where('type', $item->video_type)
                        ->where('id', $item->video_id)
                        ->first();
                }
        $banner[] = $data;
                
            }

            // print_r($banner);die;

      $homeBanner =  BannerModel::orderBy('id','desc')->get();

        return view('frontend.home', compact('banner','homeBanner','kids','tvShow','video'));
    }
        // public function home(Request $request)
        // {
        //     // Validate inputs
        

        //     $is_home_screen = $request->input('is_home_screen');
        //     $type_id = $request->input('type_id');
        //     $user_id = $request->input('user_id', 0);

            
        //     // Get banner data
        //     $query = Banner::where('is_home_screen', $is_home_screen);
        //     if ($is_home_screen == 2) {
        //         $query->where('type_id', $type_id);
        //     }
        //     if ($parent_control_status == 1) {
        //         $query->where('video_type', 7);
        //     }

        //     $banner_data = $query->latest()->get();
        //     $banner = [];

        //     foreach ($banner_data as $item) {
        //         $data = null;
        //         $subvideo_type = $item->subvideo_type ?? 0;

        //         if (in_array($item->video_type, [1, 5, 6, 7])) {
        //             $data = Video::where('video_type', $item->video_type)
        //                 ->where('id', $item->video_id)
        //                 ->where('status', 1)
        //                 ->first();
        //         } elseif ($item->video_type == 2) {
        //             $data = TVShow::where('video_type', $item->video_type)
        //                 ->where('id', $item->video_id)
        //                 ->where('status', 1)
        //                 ->first();
        //         }
        // $banner[] = $data;
                
        //     }

        //     // Extra data for view
        //     $kids = Kids::get();
        //     $tvShow = TvShow::get();
        //     $video = Video::orderBy('id', 'desc')->get();
        // // print_r($banner);die;
        //     return view('frontend.home', compact('banner', 'kids', 'tvShow', 'video'));
        // }

    public function movies(){

        $latest = Video::where('category', 'Movies')->where('type', 'latest')->orderBy('id','desc')->get();
        $movies = Video::where('category', 'Movies')->orderBy('id','desc')->get();
        
         $is_home_screen ='2';
        $query = Banner::where('is_home_screen', $is_home_screen);
    $banner_data = $query->latest()->get();
            $banner = [];
         foreach ($banner_data as $item) {
                $data = null;
                $subvideo_type = $item->subvideo_type ?? 0;

                if ($item->video_type) {
                    $data = Video::where('id', $item->video_id)
                        ->first();
                } elseif ($item->video_type == 2) {
                    $data = TVShow::where('type', $item->video_type)
                        ->where('id', $item->video_id)
                        ->first();
                }
        $banner[] = $data;
                
            }

            // print_r($banner);die;

        return view('frontend.movies' , compact('banner','movies','latest')) ;
    }

    public function liveTv(){
        $livevideo = LiveVideo::all();


        $is_home_screen ='2';
        $query = Banner::where('is_home_screen', $is_home_screen);
    $banner_data = $query->latest()->get();
            $banner = [];
         foreach ($banner_data as $item) {
                $data = null;
                $subvideo_type = $item->subvideo_type ?? 0;

                if ($item->video_type) {
                    $data = Video::where('id', $item->video_id)
                        ->first();
                } elseif ($item->video_type == 3) {
                    $data = TVShow::where('type', $item->video_type)
                        ->where('id', $item->video_id)
                        ->first();
                }
        $banner[] = $data;
                
            }

        return view('frontend.liveTV', compact('livevideo','banner'));
    }


    public function sports(){

        $is_home_screen ='2';
        $query = Banner::where('is_home_screen', $is_home_screen);
    $banner_data = $query->latest()->get();
            $banner = [];
         foreach ($banner_data as $item) {
                $data = null;
                $subvideo_type = $item->subvideo_type ?? 0;

                if ($item->video_type) {
                    $data = Video::where('id', $item->video_id)
                        ->first();
                } elseif ($item->video_type == 2) {
                    $data = TVShow::where('type', $item->video_type)
                        ->where('id', $item->video_id)
                        ->first();
                }
        $banner[] = $data;
                
            }

        return view('frontend.sports' , compact('banner'));
    }


    public function tvShows(){
            $livevideo = LiveVideo::all();
            $tvshow = TvShow::orderBy('id','desc')->get();

            $is_home_screen ='2';
        $query = Banner::where('is_home_screen', $is_home_screen);
    $banner_data = $query->latest()->get();
            $banner = [];
         foreach ($banner_data as $item) {
                $data = null;
                $subvideo_type = $item->subvideo_type ?? 0;

                if ($item->video_type) {
                    $data = Video::where('id', $item->video_id)
                        ->first();
                } elseif ($item->video_type == 2) {
                    $data = TVShow::where('type', $item->video_type)
                        ->where('id', $item->video_id)
                        ->first();
                }
        $banner[] = $data;
                
            }
        return view('frontend.TVshow', compact('tvshow','livevideo','banner'));
    }


    public function upcoming(){

       $video= Video::where('category','upcoming')->orderBy('id','desc')->get();
       $upvideo= UpcommingVideo::orderBy('id','desc')->get();
        $uptvshow= UpcommingTvShow::orderBy('id','desc')->get();
        $upsection= UpcomingSection::orderBy('id','desc')->get();
        // print_r($upvideo);die;

        $is_home_screen ='2';
        $query = Banner::where('is_home_screen', $is_home_screen);
    $banner_data = $query->latest()->get();
            $banner = [];
         foreach ($banner_data as $item) {
                $data = null;
                $subvideo_type = $item->subvideo_type ?? 0;

                if ($item->video_type) {
                    $data = Video::where('id', $item->video_id)
                        ->first();
                } elseif ($item->video_type == 2) {
                    $data = TVShow::where('type', $item->video_type)
                        ->where('id', $item->video_id)
                        ->first();
                }
        $banner[] = $data;
                
            }
        return view('frontend.upcoming', compact('video','upvideo','uptvshow','upsection','banner'));
    }

    public function kids(){

        $kids = Kids::orderBy('id','desc')->get();

        $is_home_screen ='2';
        $query = Banner::where('is_home_screen', $is_home_screen);
    $banner_data = $query->latest()->get();
            $banner = [];
         foreach ($banner_data as $item) {
                $data = null;
                $subvideo_type = $item->subvideo_type ?? 0;

                if ($item->video_type) {
                    $data = Video::where('id', $item->video_id)
                        ->first();
                } elseif ($item->video_type == 2) {
                    $data = TVShow::where('type', $item->video_type)
                        ->where('id', $item->video_id)
                        ->first();
                }
        $banner[] = $data;
                
            }
        return view('frontend.kids', compact('kids','banner'));
    }

    public function rentMovies(){
        $rentMovies= Video::where('is_rent','yes')->orderBy('id','desc')->get();
        return view('frontend.rent-movie', compact('rentMovies'));
    }

    public function rentShows(){

        return view('frontend.rent-show');
    }
}
