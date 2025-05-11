<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\TVShow;
use App\Models\VideoType;
use App\Models\Video;
use Illuminate\Support\Facades\Validator;
use Exception;
class BannerController extends Controller
{
    public function index()
    {
        $type = VideoType::get();
        $video =Video::all();
        $videoComedy = Video::where('type', 1)->get();
        $videoHorror = Video::where('type', 2)->get();
        $videoTVShow = Video::where('type', 3)->get();
        $videoTVChannel = Video::where('type', 4)->get();
        $videoSports = Video::where('type', 5)->get();
        $videoUpcoming = Video::where('type', 6)->get();
        // $videoComedy = Video::where('type', 1)->get();
        // $videoComedy = Video::where('type', 1)->get();
        // $videoComedy = Video::where('type', 1)->get();

        return view('admin.banner.home', compact('type','video','videoComedy','videoHorror','videoTVShow','videoTVChannel','videoSports','videoUpcoming'));
    }
    // public function comedy()
    // {
    //     return view('admin.banner.comedy');
    // }
    public function horror()
    {
        return view('admin.banner.horror');
    }
    public function tvshow()
    {
        return view('admin.banner.tvshow');
    }
    public function tvchannel()
    {
        return view('admin.banner.tvchannel');
    }
    public function sport()
    {
        return view('admin.banner.sport');
    }
    public function upcoming()
    {
        return view('admin.banner.upcoming');
    }

    //  public function index()
    // {
    //     try {

    //         $params['type'] = VideoType::where('status', 1)->get();
    //         $params['video'] = [];
    //         if ($params['type'] != null && count($params['type']) > 0) {

    //             if ($params['type'][0]['type'] == 1) {
    //                 $params['video'] = Video::where('type_id', $params['type'][0]['id'])->where('status', 1)->get();
    //             } else if ($params['type'][0]['type'] == 2) {

    //                 $ids = $this->common->get_tv_show_ids_by_episode();
    //                 $params['video'] = TVShow::whereIn('id', $ids)->where('type_id', $params['type'][0]['id'])->where('status', 1)->get();
    //             }
    //         }
    //         return view('admin.banner.home', $params);
    //     } catch (Exception $e) {
    //         return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
    //     }
    // }
    public function store(Request $request)
    {
        // print_r($request->all());die;
        try {

            $validator = Validator::make($request->all(), [
                'is_home_screen' => 'required',
                'type_id' => 'required',
                'video_type' => 'required',
                'video_id' => 'required',
            ]);
            if ($validator->fails()) {
                $errs = $validator->errors()->all();
                return response()->json(array('status' => 400, 'errors' => $errs));
            }

            $banner = new Banner();
            $banner->is_home_screen = $request->is_home_screen;
            $banner->type_id = $request->type_id;
            $banner->video_type = $request->video_type;
            $banner->subvideo_type = isset($request->subvideo_type) ? $request->subvideo_type : 0;
            $banner->video_id = $request->video_id;
            $banner->status = 1;
            if ($banner->save()) {
                return response()->json(array('status' => 200, 'success' => __('label.controller.data_add_successfully')));
            } else {
                return response()->json(array('status' => 400, 'errors' => __('label.controller.data_not_added')));
            }
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function TypeByVideo(Request $request)
    {
        try {

            $data = [];
            if ($request['type'] == 1) {

                $data = Video::where('type_id', $request['type_id'])->where('status', 1)->get();
            } else if ($request['type'] == 2) {

                $ids = $this->common->get_tv_show_ids_by_episode();
                $data = TVShow::whereIn('id', $ids)->where('type_id', $request['type_id'])->where('status', 1)->get();
            } else if ($request['type'] == 5 || $request['type'] == 6 || $request['type'] == 7) {

                if ($request['subvideo_type'] == 1) {
                    $data = Video::where('type_id', $request['type_id'])->where('status', 1)->get();
                } else if ($request['subvideo_type'] == 2) {

                    $ids = $this->common->get_tv_show_ids_by_episode();
                    $data = TVShow::whereIn('id', $ids)->where('type_id', $request['type_id'])->where('status', 1)->get();
                }
            }
            return response()->json(array('status' => 200, 'success' => __('label.controller.data_add_successfully'), 'result' => $data));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function BannerList(Request $request)
    {
        try {

            if ($request['is_home_screen'] == 1) {

                $data = Banner::where('is_home_screen', $request['is_home_screen'])->with('type')->orderBy('id', 'desc')->get();
                for ($i = 0; $i < count($data); $i++) {

                    if ($data[$i]['video_type'] == 1) {

                        $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;
                    } else if ($data[$i]['video_type'] == 1) {

                        $show = TVShow::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $show;
                    } else if ($data[$i]['video_type'] == 5 || $data[$i]['video_type'] == 6) {

                        if ($data[$i]['subvideo_type'] == 1) {

                            $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                            $data[$i]['video'] = $video;
                        } else if ($data[$i]['subvideo_type'] == 2) {

                            $show = TVShow::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                            $data[$i]['video'] = $show;
                        }
                    }else if($data[$i]['video_type'] == 7){

                         $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;
                    }
                }
            } else {
                $data = Banner::where('is_home_screen', $request['is_home_screen'])->where('type_id', $request['type_id'])->with('type')->orderBy('id', 'desc')->get();
               
                // $data = Banner::where('type_id', $request['type_id'])->where('is_home_screen', $request['is_home_screen'])->orderBy('id', 'desc')->with('type')->get();
                for ($i = 0; $i < count($data); $i++) {

                    if ($data[$i]['video_type'] == 1) {

                        $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;
                    } else if ($data[$i]['video_type'] == 2) {

                         $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;

                    } else if ($data[$i]['video_type'] == 3) {

                         $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;

                    } else if ($data[$i]['video_type'] == 4) {

                        $show = TVShow::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $show;

                    } else if ($data[$i]['video_type'] == 5) {

                        if ($data[$i]['subvideo_type'] == 1) {

                            $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                            $data[$i]['video'] = $video;
                        } else if ($data[$i]['subvideo_type'] == 2) {

                            $show = TVShow::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                            $data[$i]['video'] = $show;
                        }
                    }else if($data[$i]['video_type'] == 6){

                         $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;
                    }else if($data[$i]['video_type'] == 7){

                         $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;
                    }
                    else if($data[$i]['video_type'] == 8){

                         $video = Video::select('id', 'name')->where('id', $data[$i]['video_id'])->first();
                        $data[$i]['video'] = $video;
                    }
                }
            }

            return response()->json(array('status' => 200, 'success' => __('label.controller.data_add_successfully'), 'result' => $data));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function destroy($id)
    {
        try {


            Banner::where('id', $id)->delete();
            return response()->json(array('status' => 200, 'success' => __('label.controller.data_delete_successfully')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }


}
