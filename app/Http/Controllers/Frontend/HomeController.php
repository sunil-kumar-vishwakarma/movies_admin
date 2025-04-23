<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\Kids;
use App\Models\TvShow;
use App\Models\Video;

class HomeController extends Controller
{
    
    public function home(){
       $kids = Kids::get();
       $tvShow = TvShow::get();
    //    $video = Video::where('type', 'Movies')->get();
       $video = Video::get();
    

      $homeBanner =  BannerModel::orderBy('id','desc')->get();

        return view('frontend.home', compact('homeBanner','kids','tvShow','video'));
    }

    public function movies(){

        return view('frontend.movies');
    }

    public function liveTv(){

        return view('frontend.liveTV');
    }


    public function sports(){

        return view('frontend.sports');
    }


    public function tvShows(){

        return view('frontend.TVshow');
    }


    public function upcoming(){

        return view('frontend.upcoming');
    }

    public function kids(){

        return view('frontend.kids');
    }

    public function rentMovies(){

        return view('frontend.rent-movie');
    }

    public function rentShows(){

        return view('frontend.rent-show');
    }
}
