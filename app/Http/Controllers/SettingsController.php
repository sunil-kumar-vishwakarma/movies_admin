<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
// use App\Models\Common;
use App\Models\General_Setting;
use App\Models\Onboarding_Screen;
use App\Models\Smtp_Setting;
use App\Models\Social_Link;
use Illuminate\Support\Facades\Validator;
use Exception;

use App\Models\Avatar;
use App\Models\Banner;
use App\Models\Bookmark;
use App\Models\Cast;
use App\Models\Category;
use App\Models\Channel;
use App\Models\Comment;
use App\Models\Common;
use App\Models\Coupon;
use App\Models\Device_Sync;
use App\Models\Device_Watching;
use App\Models\Download;
use App\Models\Home_Section;
use App\Models\Language;
use App\Models\Like;
use App\Models\Notification;

use App\Models\Package;
use App\Models\Package_Detail;
use App\Models\Page;
use App\Models\Producer;
use App\Models\Read_Notification;
use App\Models\Rent_Price_List;
use App\Models\Rent_Transction;
use App\Models\Season;
use App\Models\Sub_Profile;
use App\Models\Transction;
use App\Models\TV_Login;
use App\Models\TVShow;
use App\Models\TVShow_Video;
use App\Models\Type;
use App\Models\User;
use App\Models\Video;
use App\Models\Video_Watch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class SettingsController extends Controller
{
    public function system_settings()
    {
        return view('admin.system_settings');
    }
    public function panel_settings()
    {
        return view('admin.panel_settings');
    }

    // public function app_settings()
    // {
    //     return view('admin.app_settings');
    // }
    // public function app_settings()
    // {
    //     try {

    //         // $params['result'] = Setting_Data();
    //         $params['result'] = General_Setting::all();
    //         if ($params['result']) {

    //             $params['result']['app_logo'] = $params['result'];
    //             // $params['result']['app_logo'] = $this->common->getImage($this->folder, $params['result']['app_logo'], 'normal');

    //             $params['social_link'] = Social_Link::get();
    //             // $this->common->imageNameToUrl($params['social_link'], 'image', $this->folder, 'normal');

    //             // $params['onboarding_screen'] = Onboarding_Screen::get();
    //             // $this->common->imageNameToUrl($params['onboarding_screen'], 'image', $this->folder, 'normal');

    //             $params['smtp'] = Smtp_Setting::latest()->first();
    //             // print_r($params);die;
    //             return view('admin.app_settings', $params);
    //         } else {
    //             return redirect()->back()->with('error', __('label.controller.page_not_found'));
    //         }
    //     } catch (Exception $e) {
    //         return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
    //     }
    // }
    public function app_settings() 
{
    try {
        $params['result'] = General_Setting::all()->pluck('value', 'key')->toArray();

        if ($params['result']) {
            $params['social_link'] = Social_Link::get();
            $params['smtp'] = Smtp_Setting::latest()->first();

            return view('admin.app_settings', $params); // not compact('params')
        } else {
            return redirect()->back()->with('error', __('label.controller.page_not_found'));
        }
    } catch (Exception $e) {
        return response()->json(['status' => 400, 'errors' => $e->getMessage()]);
    }
}

    public function app(Request $request)
    {
        // print_r($request->all());die;
        try {

            $data = $request->all();
            $data["app_name"] = isset($data['app_name']) ? $data['app_name'] : '';
            $data["host_email"] = isset($data['host_email']) ? $data['host_email'] : '';
            $data["app_version"] = isset($data['app_version']) ? $data['app_version'] : '';
            $data["author"] = isset($data['author']) ? $data['author'] : '';
            $data["email"] = isset($data['email']) ? $data['email'] : '';
            $data["contact"] = isset($data['contact']) ? $data['contact'] : '';
            $data["app_desripation"] = isset($data['app_desripation']) ? $data['app_desripation'] : '';
            $data["website"] = isset($data['website']) ? $data['website'] : '';

            // if (isset($data['app_logo'])) {
            //     $files = $data['app_logo'];
            if ($request->hasFile('app_logo')) {
            $image = $request->file('app_logo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/app_logo'), $filename);
             $data['app_logo'] = 'uploads/app_logo/' . $filename;
            }

                // $data['app_logo'] = $this->common->saveImage($files, $this->folder, 'app_');
                // $this->common->deleteImageToFolder($this->folder, basename($data['old_app_logo']));
            // }

            foreach ($data as $key => $value) {
                $setting = General_Setting::where('key', $key)->first();
                if (isset($setting->id)) {
                    $setting->value = $value;
                    $setting->save();
                }
            }
            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function saveTmdbKey(Request $request)
    {
        try {

            if ($request['tmdb_status'] == 1) {
                $validator = Validator::make($request->all(), [
                    'tmdb_api_key' => 'required',
                ]);
                if ($validator->fails()) {
                    $errs = $validator->errors()->all();
                    return response()->json(array('status' => 400, 'errors' => $errs));
                }
            }

            $data = $request->all();
            $data["tmdb_status"] = isset($data['tmdb_status']) ? $data['tmdb_status'] : 0;
            $data["tmdb_api_key"] = isset($data['tmdb_api_key']) ? $data['tmdb_api_key'] : '';

            foreach ($data as $key => $value) {
                $setting = General_Setting::where('key', $key)->first();
                if (isset($setting->id)) {
                    $setting->value = $value;
                    $setting->save();
                }
            }
            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function currency(Request $request)
    {
        try {

            $data = $request->all();
            $data["currency"] = isset($data['currency']) ? strtoupper($data['currency']) : '';
            $data["currency_code"] = isset($data['currency_code']) ? $data['currency_code'] : '';

            foreach ($data as $key => $value) {
                $setting = General_Setting::where('key', $key)->first();
                if (isset($setting->id)) {
                    $setting->value = $value;
                    $setting->save();
                }
            }
            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function saveBasicConfigrations(Request $request)
    {
        try {

            if ($request['multiple_device_sync'] == 1) {

                $validator = Validator::make($request->all(), [
                    'no_of_device_sync' => 'required|numeric|min:1',
                ]);
                if ($validator->fails()) {
                    $errs = $validator->errors()->all();
                    return response()->json(array('status' => 400, 'errors' => $errs));
                }
            }

            $data = $request->all();
            $data["auto_play_trailer"] = isset($data['auto_play_trailer']) ? $data['auto_play_trailer'] : 1;
            $data["active_tv_status"] = isset($data['active_tv_status']) ? $data['active_tv_status'] : 1;
            $data["parent_control_status"] = isset($data['parent_control_status']) ? $data['parent_control_status'] : 1;
            $data["watchlist_status"] = isset($data['watchlist_status']) ? $data['watchlist_status'] : 1;
            $data["download_status"] = isset($data['download_status']) ? $data['download_status'] : 1;
            $data["continue_watching_status"] = isset($data['continue_watching_status']) ? $data['continue_watching_status'] : 1;
            $data["subscription_status"] = isset($data['subscription_status']) ? $data['subscription_status'] : 1;
            $data["coupon_status"] = isset($data['coupon_status']) ? $data['coupon_status'] : 1;
            $data["rent_status"] = isset($data['rent_status']) ? $data['rent_status'] : 1;
            $data["multiple_device_sync"] = isset($data['multiple_device_sync']) ? $data['multiple_device_sync'] : 0;
            $data["no_of_device_sync"] = isset($data['no_of_device_sync']) ? $data['no_of_device_sync'] : 0;
            $data["on_boarding_screen_status"] = isset($data['on_boarding_screen_status']) ? $data['on_boarding_screen_status'] : 1;

            foreach ($data as $key => $value) {
                $setting = General_Setting::where('key', $key)->first();
                if (isset($setting->id)) {
                    $setting->value = $value;
                    $setting->save();
                }
            }
            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function smtpSave(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'status' => 'required',
                'host' => 'required',
                'port' => 'required',
                'protocol' => 'required',
                'user' => 'required',
                'pass' => 'required',
                'from_name' => 'required',
                'from_email' => 'required',
            ]);
            if ($validator->fails()) {
                $errs = $validator->errors()->all();
                return response()->json(array('status' => 400, 'errors' => $errs));
            }

            if (isset($request->id) && $request->id != null && $request->id != "") {

                $smtp = Smtp_Setting::where('id', $request->id)->first();
                if (isset($smtp->id)) {
                    $smtp->protocol = $request->protocol;
                    $smtp->host = $request->host;
                    $smtp->port = $request->port;
                    $smtp->user = $request->user;
                    $smtp->pass = $request->pass;
                    $smtp->from_name = $request->from_name;
                    $smtp->from_email = $request->from_email;
                    $smtp->status = $request->status;
                    if ($smtp->save()) {
                        return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
                    } else {
                        return response()->json(array('status' => 400, 'errors' => __('label.controller.data_not_updated')));
                    }
                }
            } else {

                $insert = new Smtp_Setting();
                $insert->protocol = $request->protocol;
                $insert->host = $request->host;
                $insert->port = $request->port;
                $insert->user = $request->user;
                $insert->pass = $request->pass;
                $insert->from_name = $request->from_name;
                $insert->from_email = $request->from_email;
                $insert->status = $request->status;
                if ($insert->save()) {

                    $this->common->SetSmtpConfig();
                    return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
                } else {
                    return response()->json(array('status' => 400, 'errors' => __('label.controller.data_not_updated')));
                }
            }
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function saveSocialLink(Request $request)
    {
        try {

            $arr_name = $request['name'];
            $arr_url = $request['url'];
            $arr_img = $request->file('image');
            $arr_old_image = $request['old_image'];

            // Save New All Link
            $not_delete_img = array();
            $not_delete_ids = array();

            for ($i = 0; $i < count($arr_name); $i++) {

                if (!empty($arr_name[$i]) && !empty($arr_url[$i])) {

                    if (!empty($arr_img[$i])) {

                        $insert = new Social_Link();
                        $insert->name = $arr_name[$i];
                        $insert->url = $arr_url[$i];
                        $insert->image = $this->common->saveImage($arr_img[$i], $this->folder, 'soc_link_');
                        $insert->save();

                        $this->common->deleteImageToFolder($this->folder, $arr_old_image[$i]);
                    } else {
                        if (!empty($arr_old_image[$i])) {

                            $insert = new Social_Link();
                            $insert->name = $arr_name[$i];
                            $insert->url = $arr_url[$i];
                            $insert->image = $arr_old_image[$i];
                            $insert->save();
                            $not_delete_img[] = $arr_old_image[$i];
                        }
                    }
                    $not_delete_ids[] = $insert->id;
                }
            }

            // Delete Old All Link 
            $all_old_link = Social_Link::whereNotIn('id', $not_delete_ids)->get();
            for ($i = 0; $i < count($all_old_link); $i++) {

                if (!in_array($all_old_link[$i]['image'], $not_delete_img)) {

                    $this->common->deleteImageToFolder($this->folder, $all_old_link[$i]['image']);
                }

                $all_old_link[$i]->delete();
            }

            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function saveOnBoardingScreen(Request $request)
    {
        try {

            $arr_title = $request['title'];
            $arr_img = $request->file('image');
            $arr_old_image = $request['old_image'];

            // Save New All Link
            $not_delete_img = array();
            $not_delete_ids = array();

            for ($i = 0; $i < count($arr_title); $i++) {

                if (!empty($arr_title[$i])) {

                    if (!empty($arr_img[$i])) {

                        $insert = new Onboarding_Screen();
                        $insert->title = $arr_title[$i];
                        $insert->image = $this->common->saveImage($arr_img[$i], $this->folder, 'on_board_');
                        $insert->save();

                        $this->common->deleteImageToFolder($this->folder, $arr_old_image[$i]);
                    } else {
                        if (!empty($arr_old_image[$i])) {

                            $insert = new Onboarding_Screen();
                            $insert->title = $arr_title[$i];
                            $insert->image = $arr_old_image[$i];
                            $insert->save();
                            $not_delete_img[] = $arr_old_image[$i];
                        }
                    }
                    $not_delete_ids[] = $insert->id;
                }
            }

            // Delete Old Data
            $all_old_data = Onboarding_Screen::whereNotIn('id', $not_delete_ids)->get();
            for ($i = 0; $i < count($all_old_data); $i++) {

                if (!in_array($all_old_data[$i]['image'], $not_delete_img)) {

                    $this->common->deleteImageToFolder($this->folder, $all_old_data[$i]['image']);
                }
                $all_old_data[$i]->delete();
            }

            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function vapIdKey(Request $request)
    {
        try {

            $data = $request->all();
            $data["vapid_key"] = isset($data['vapid_key']) ? $data['vapid_key'] : '';

            foreach ($data as $key => $value) {
                $setting = General_Setting::where('key', $key)->first();
                if (isset($setting->id)) {
                    $setting->value = $value;
                    $setting->save();
                }
            }
            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function firebaseProjectId(Request $request)
    {
        try {

            $data = $request->all();
            $data['firebase_project_id'] = isset($data['firebase_project_id']) ? $data['firebase_project_id'] : '';

            foreach ($data as $key => $value) {
                $setting = General_Setting::where('key', $key)->first();
                if (isset($setting->id)) {
                    $setting->value = $value;
                    $setting->save();
                }
            }
            return response()->json(array('status' => 200, 'success' => __('label.controller.setting_save')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }

    public function ClearData()
    {
        try {

            // Folder Name
            $admin = 'public/admin';
            $app = 'public/app';
            $avatar = 'public/avatar';
            $cast = 'public/cast';
            $category = 'public/category';
            $channel = 'public/channel';
            $content = 'public/content';
            $database = 'public/database';
            $language = 'public/language';
            $notification = 'public/notification';
            $producer = 'public/producer';
            $user = 'public/user';

            // Name Array
            $admin_name = [];
            $app_name = [];
            $avatar_name = [];
            $cast_name = [];
            $category_name = [];
            $channel_name = [];
            $content_name = [];
            $database_name = [];
            $language_name = [];
            $notification_name = [];
            $producer_name = [];
            $user_name = [];

            // Get Files
            $admin_file = Storage::allFiles($admin);
            $app_file = Storage::allFiles($app);
            $avatar_file = Storage::allFiles($avatar);
            $cast_file = Storage::allFiles($cast);
            $category_file = Storage::allFiles($category);
            $channel_file = Storage::allFiles($channel);
            $content_file = Storage::allFiles($content);
            $database_file = Storage::allFiles($database);
            $language_file = Storage::allFiles($language);
            $notification_file = Storage::allFiles($notification);
            $producer_file = Storage::allFiles($producer);
            $user_file = Storage::allFiles($user);

            // Add Name In Array
            foreach ($admin_file as $admin_file) {
                array_push($admin_name, pathinfo($admin_file)['basename']);
            }
            foreach ($app_file as $app_file) {
                array_push($app_name, pathinfo($app_file)['basename']);
            }
            foreach ($avatar_file as $avatar_file) {
                array_push($avatar_name, pathinfo($avatar_file)['basename']);
            }
            foreach ($cast_file as $cast_file) {
                array_push($cast_name, pathinfo($cast_file)['basename']);
            }
            foreach ($category_file as $category_file) {
                array_push($category_name, pathinfo($category_file)['basename']);
            }
            foreach ($channel_file as $channel_file) {
                array_push($channel_name, pathinfo($channel_file)['basename']);
            }
            foreach ($content_file as $content_file) {
                array_push($content_name, pathinfo($content_file)['basename']);
            }
            foreach ($database_file as $database_file) {
                array_push($database_name, pathinfo($database_file)['basename']);
            }
            foreach ($language_file as $language_file) {
                array_push($language_name, pathinfo($language_file)['basename']);
            }
            foreach ($notification_file as $notification_file) {
                array_push($notification_name, pathinfo($notification_file)['basename']);
            }
            foreach ($producer_file as $producer_file) {
                array_push($producer_name, pathinfo($producer_file)['basename']);
            }
            foreach ($user_file as $user_file) {
                array_push($user_name, pathinfo($user_file)['basename']);
            }

            // Delete File In Folder
            foreach ($admin_name as $key => $value) {

                $Panel_Data = Panel_Data();

                $login_page_img = 'yes';
                if ($Panel_Data['login_page_img'] != $value) {
                    $login_page_img = 'no';
                }
                $profile_no_img = 'yes';
                if ($Panel_Data['profile_no_img'] != $value) {
                    $profile_no_img = 'no';
                }
                $normal_no_img = 'yes';
                if ($Panel_Data['normal_no_img'] != $value) {
                    $normal_no_img = 'no';
                }
                $portrait_no_img = 'yes';
                if ($Panel_Data['portrait_no_img'] != $value) {
                    $portrait_no_img = 'no';
                }
                $landscape_no_img = 'yes';
                if ($Panel_Data['landscape_no_img'] != $value) {
                    $landscape_no_img = 'no';
                }

                if ($login_page_img == 'no' && $profile_no_img == 'no' && $normal_no_img == 'no' && $portrait_no_img == 'no' && $landscape_no_img == 'no') {
                    $this->common->deleteImageToFolder('admin', $value);
                }
            }
            foreach ($app_name as $key => $value) {

                $app_file_check = Page::select('id')->where('icon', $value)->first();
                $app_file_check_1 = Social_Link::select('id')->where('image', $value)->first();
                $app_file_check_2 = Onboarding_Screen::select('id')->where('image', $value)->first();

                $Setting_Data = Setting_Data();
                $setting_data = 'yes';
                if ($Setting_Data['app_logo'] != $value) {
                    $setting_data = 'no';
                }

                if ($app_file_check == null && $app_file_check_1 == null && $app_file_check_2 == null && $setting_data == 'no') {
                    $this->common->deleteImageToFolder('app', $value);
                }
            }
            foreach ($avatar_name as $key => $value) {

                $avatar_file_check = Avatar::select('id')->where('image', $value)->first();
                if ($avatar_file_check == null) {
                    $this->common->deleteImageToFolder('avatar', $value);
                }
            }
            foreach ($cast_name as $key => $value) {

                $cast_file_check = Cast::select('id')->where('image', $value)->first();
                if ($cast_file_check == null) {
                    $this->common->deleteImageToFolder('cast', $value);
                }
            }
            foreach ($category_name as $key => $value) {

                $category_file_check = Category::select('id')->where('image', $value)->first();
                if ($category_file_check == null) {
                    $this->common->deleteImageToFolder('category', $value);
                }
            }
            foreach ($channel_name as $key => $value) {

                $channel_file_check = Channel::select('id')->where('portrait_img', $value)->orwhere('landscape_img', $value)->first();
                if ($channel_file_check == null) {
                    $this->common->deleteImageToFolder('channel', $value);
                }
            }
            foreach ($content_name as $key => $value) {

                $video_file_check = Video::select('id')->where('thumbnail', $value)->orwhere('landscape', $value)
                    ->orwhere('video_320', $value)->orwhere('video_480', $value)->orwhere('video_720', $value)->orwhere('video_1080', $value)
                    ->orwhere('subtitle_1', $value)->orwhere('subtitle_2', $value)->orwhere('subtitle_3', $value)
                    ->orwhere('trailer_url', $value)->first();
                $tvshow_file_check = TVShow::select('id')->where('thumbnail', $value)->orwhere('landscape', $value)->orwhere('trailer_url', $value)->first();
                $tvshow_video_file_check = TVShow_Video::select('id')->where('thumbnail', $value)->orwhere('landscape', $value)
                    ->orwhere('video_320', $value)->orwhere('video_480', $value)->orwhere('video_720', $value)->orwhere('video_1080', $value)
                    ->orwhere('subtitle_1', $value)->orwhere('subtitle_2', $value)->orwhere('subtitle_3', $value)->first();

                if ($video_file_check == null && $tvshow_file_check == null && $tvshow_video_file_check == null) {
                    $this->common->deleteImageToFolder('content', $value);
                }
            }
            foreach ($database_name as $key => $value) {
                $this->common->deleteImageToFolder('database', $value);
            }
            foreach ($language_name as $key => $value) {

                $language_file_check = Language::select('id')->where('image', $value)->first();
                if ($language_file_check == null) {
                    $this->common->deleteImageToFolder('language', $value);
                }
            }
            foreach ($notification_name as $key => $value) {

                $notification_file_check = Notification::select('id')->where('image', $value)->first();
                if ($notification_file_check == null) {
                    $this->common->deleteImageToFolder('notification', $value);
                }
            }
            foreach ($producer_name as $key => $value) {

                $producer_file_check = Producer::select('id')->where('image', $value)->first();
                if ($producer_file_check == null) {
                    $this->common->deleteImageToFolder('producer', $value);
                }
            }
            foreach ($user_name as $key => $value) {

                $user_file_check = User::select('id')->where('image', $value)->first();
                if ($user_file_check == null) {
                    $this->common->deleteImageToFolder('user', $value);
                }
            }

            return response()->json(array('status' => 200, 'success' => __('label.controller.data_clear_successfully')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function DownloadSqlFile()
    {
        try {

            Artisan::call('config:clear');

            $storageAt = storage_path() . "/app/public/database";
            if (!file_exists($storageAt)) {
                File::makeDirectory($storageAt, 0755, true, true);
            }

            $mysqlHostName = env('DB_HOST');
            $mysqlUserName = env('DB_USERNAME');
            $mysqlPassword = env('DB_PASSWORD');
            $DbName = env('DB_DATABASE');

            // get all table name
            $result = DB::select("SHOW TABLES");
            $prep = "Tables_in_$DbName";

            foreach ($result as $res) {
                $tables[] =  $res->$prep;
            }

            $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword", array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $statement = $connect->prepare("SHOW TABLES");
            $statement->execute();
            $result = $statement->fetchAll();

            $output = '';
            foreach ($tables as $table) {

                $show_table_query = "SHOW CREATE TABLE " . $table . "";
                $statement = $connect->prepare($show_table_query);
                $statement->execute();
                $show_table_result = $statement->fetchAll();

                foreach ($show_table_result as $show_table_row) {
                    $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
                }
                $select_query = "SELECT * FROM " . $table . "";
                $statement = $connect->prepare($select_query);
                $statement->execute();
                $total_row = $statement->rowCount();

                for ($count = 0; $count < $total_row; $count++) {
                    $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                    $table_column_array = array_keys($single_result);
                    $table_value_array = array_values($single_result);
                    $output .= "\nINSERT INTO $table (";
                    $output .= "`" . implode("`, `", $table_column_array) . "`) VALUES (";
                    $output .= "'" . implode("', '", $table_value_array) . "');\n";
                }
            }

            // $file_name = App_Name() . '_db_' . date('d_m_Y') . '.sql';
            $file_name = $DbName.'_db_' . date('d_m_Y_H_i_s') . '.sql';
            $file_handle = fopen(storage_path() . '/app/public/database/' . $file_name, 'w+');
            fwrite($file_handle, $output);
            fclose($file_handle);
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file_name));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize(storage_path() . '/app/public/database/' . $file_name));
            ob_clean();
            flush();
            readfile(storage_path() . '/app/public/database/' . $file_name);
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function DummyData()
    {
        try {

            // $artist = [
            //     ['name' => 'Arijit Singh', 'image' => 'artist1.jpg', 'bio' => $this->common->artist_tag_line(), 'status' => 1],
            //     ['name' => 'Sonu Nigam', 'image' => 'artist2.jpg', 'bio' => $this->common->artist_tag_line(), 'status' => 1],
            //     ['name' => 'Shreya Ghoshal', 'image' => 'artist3.jpg', 'bio' => $this->common->artist_tag_line(), 'status' => 1],
            // ];
            // Artist::insert($artist);

            // $category = [
            //     ['name' => 'Sport', 'image' => 'category1.jpg', 'type' => 1, 'status' => 1],
            //     ['name' => 'Bollywood', 'image' => 'category2.jpg', 'type' => 1, 'status' => 1],
            //     ['name' => 'Workout', 'image' => 'category3.jpg', 'type' => 2, 'status' => 1],
            //     ['name' => 'Romance', 'image' => 'category4.jpg', 'type' => 2, 'status' => 1],
            // ];
            // Category::insert($category);

            // $language = [
            //     ['name' => 'Hindi', 'image' => 'language1.jpg', 'status' => 1],
            //     ['name' => 'English', 'image' => 'language2.jpg', 'status' => 1],
            // ];
            // Language::insert($language);

            // $hashtag = [
            //     ['name' => 'workout', 'total_used' => 78, 'status' => 1],
            //     ['name' => 'travel', 'total_used' => 99, 'status' => 1],
            //     ['name' => 'food', 'total_used' => 34, 'status' => 1],
            //     ['name' => 'lifestyle', 'total_used' => 67, 'status' => 1],
            //     ['name' => 'business', 'total_used' => 61, 'status' => 1],
            // ];
            // Hashtag::insert($hashtag);

            // $user = [
            //     [
            //         'channel_id' => 'xnawp7wg',
            //         'channel_name' => 'Thoughts of Devloper',
            //         'full_name' => 'Henry',
            //         'email' => 'henry@dt.com',
            //         'password' => Hash::make('henry'),
            //         'mobile_number' => '6352147890',
            //         'type' => 4,
            //         'image' => 'user1.jpg',
            //         'cover_img' => 'coveruser1.jpg',
            //         'description' => $this->common->user_tag_line(),
            //         'device_type' => 0,
            //         'device_token' => "",
            //         'website' => "",
            //         'facebook_url' => "",
            //         'instagram_url' => "",
            //         'twitter_url' => "",
            //         'wallet_balance' => 0,
            //         'wallet_earning' => 0,
            //         'bank_name' => "",
            //         'bank_code' => "",
            //         'bank_address' => "",
            //         'ifsc_no' => "",
            //         'account_no' => "",
            //         'id_proof' => "",
            //         'address' => "",
            //         'city' => "",
            //         'state' => "",
            //         'country' => "",
            //         'pincode' => 0,
            //         'country' => "",
            //         'status' => 1
            //     ],
            //     [
            //         'channel_id' => '3dsvzlwy',
            //         'channel_name' => 'Devloper Planet',
            //         'full_name' => 'Jack',
            //         'email' => 'jack@dt.com',
            //         'password' => Hash::make('jack'),
            //         'mobile_number' => '7845120369',
            //         'type' => 4,
            //         'image' => 'user2.jpg',
            //         'cover_img' => 'coveruser2.jpg',
            //         'description' => $this->common->user_tag_line(),
            //         'device_type' => 0,
            //         'device_token' => "",
            //         'website' => "",
            //         'facebook_url' => "",
            //         'instagram_url' => "",
            //         'twitter_url' => "",
            //         'wallet_balance' => 0,
            //         'wallet_earning' => 0,
            //         'bank_name' => "",
            //         'bank_code' => "",
            //         'bank_address' => "",
            //         'ifsc_no' => "",
            //         'account_no' => "",
            //         'id_proof' => "",
            //         'address' => "",
            //         'city' => "",
            //         'state' => "",
            //         'country' => "",
            //         'pincode' => 0,
            //         'country' => "",
            //         'status' => 1
            //     ],
            //     [
            //         'channel_id' => '32gko0af',
            //         'channel_name' => 'Devloper Studio',
            //         'full_name' => 'Axel',
            //         'email' => 'axel@dt.com',
            //         'password' => Hash::make('axel'),
            //         'mobile_number' => '820147963',
            //         'type' => 4,
            //         'image' => 'user3.jpg',
            //         'cover_img' => 'coveruser3.jpg',
            //         'description' => $this->common->user_tag_line(),
            //         'device_type' => 0,
            //         'device_token' => "",
            //         'website' => "",
            //         'facebook_url' => "",
            //         'instagram_url' => "",
            //         'twitter_url' => "",
            //         'wallet_balance' => 0,
            //         'wallet_earning' => 0,
            //         'bank_name' => "",
            //         'bank_code' => "",
            //         'bank_address' => "",
            //         'ifsc_no' => "",
            //         'account_no' => "",
            //         'id_proof' => "",
            //         'address' => "",
            //         'city' => "",
            //         'state' => "",
            //         'country' => "",
            //         'pincode' => 0,
            //         'country' => "",
            //         'status' => 1
            //     ],
            // ];
            // User::insert($user);

            // $content = [
            //     [
            //         'content_type' => 1,
            //         'channel_id' => 'xnawp7wg',
            //         'category_id' => 1,
            //         'language_id' => 1,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'Thoughts of Devloper',
            //         'description' => 'Thoughts of Devloper',
            //         'portrait_img' => 'videocontent1.jpg',
            //         'landscape_img' => 'videocontent1.jpg',
            //         'content_upload_type' => 'server_video',
            //         'content' => 'video.mp4',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 4578,
            //         'total_like' => 2700,
            //         'total_dislike' => 125,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 1,
            //         'channel_id' => '3dsvzlwy',
            //         'category_id' => 1,
            //         'language_id' => 1,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'Devloper Planet',
            //         'description' => 'Devloper Planet',
            //         'portrait_img' => 'videocontent2.jpg',
            //         'landscape_img' => 'videocontent2.jpg',
            //         'content_upload_type' => 'server_video',
            //         'content' => 'video.mp4',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 2789,
            //         'total_like' => 156,
            //         'total_dislike' => 25,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 2,
            //         'channel_id' => '0',
            //         'category_id' => 1,
            //         'language_id' => 1,
            //         'artist_id' => 1,
            //         'hashtag_id' => 0,
            //         'title' => 'Music - The Language of Feelings.',
            //         'description' => 'Music - The Language of Feelings.',
            //         'portrait_img' => 'musiccontent1.jpg',
            //         'landscape_img' => 'musiccontent1.jpg',
            //         'content_upload_type' => 'server_video',
            //         'content' => 'music.mp3',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 4578,
            //         'total_like' => 2700,
            //         'total_dislike' => 125,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 2,
            //         'channel_id' => '0',
            //         'category_id' => 2,
            //         'language_id' => 2,
            //         'artist_id' => 2,
            //         'hashtag_id' => 0,
            //         'title' => 'Music - Part of Life',
            //         'description' => 'Music - Part of Life',
            //         'portrait_img' => 'musiccontent2.jpg',
            //         'landscape_img' => 'musiccontent2.jpg',
            //         'content_upload_type' => 'server_video',
            //         'content' => 'music.mp3',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 2789,
            //         'total_like' => 156,
            //         'total_dislike' => 25,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 3,
            //         'channel_id' => 'xnawp7wg',
            //         'category_id' => 0,
            //         'language_id' => 0,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'Types of Devloper',
            //         'description' => 'Types of Devloper',
            //         'portrait_img' => 'reelscontent1.jpg',
            //         'landscape_img' => 'reelscontent1.jpg',
            //         'content_upload_type' => 'server_video',
            //         'content' => 'reels.mp4',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 4578,
            //         'total_like' => 2700,
            //         'total_dislike' => 125,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 3,
            //         'channel_id' => '3dsvzlwy',
            //         'category_id' => 0,
            //         'language_id' => 0,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'Planet Life',
            //         'description' => 'Planet Life',
            //         'portrait_img' => 'reelscontent2.jpg',
            //         'landscape_img' => 'reelscontent2.jpg',
            //         'content_upload_type' => 'server_video',
            //         'content' => 'reels.mp4',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 2789,
            //         'total_like' => 156,
            //         'total_dislike' => 25,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 4,
            //         'channel_id' => 'xnawp7wg',
            //         'category_id' => 1,
            //         'language_id' => 1,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'My Daily !!!',
            //         'description' => 'My Daily !!!',
            //         'portrait_img' => 'podcastscontent1.jpg',
            //         'landscape_img' => 'podcastscontent1.jpg',
            //         'content_upload_type' => '',
            //         'content' => '',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 4578,
            //         'total_like' => 2700,
            //         'total_dislike' => 125,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 4,
            //         'channel_id' => '3dsvzlwy',
            //         'category_id' => 2,
            //         'language_id' => 2,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'Life partner',
            //         'description' => 'Life partner',
            //         'portrait_img' => 'podcastscontent2.jpg',
            //         'landscape_img' => 'podcastscontent2.jpg',
            //         'content_upload_type' => '',
            //         'content' => '',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 1,
            //         'is_download' => 1,
            //         'is_like' => 1,
            //         'total_view' => 2789,
            //         'total_like' => 156,
            //         'total_dislike' => 25,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 5,
            //         'channel_id' => 'xnawp7wg',
            //         'category_id' => 0,
            //         'language_id' => 0,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'My Fav Playlist',
            //         'description' => 'My Fav Playlist',
            //         'portrait_img' => '',
            //         'landscape_img' => '',
            //         'content_upload_type' => '',
            //         'content' => '',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 0,
            //         'is_download' => 0,
            //         'is_like' => 0,
            //         'total_view' => 0,
            //         'total_like' => 0,
            //         'total_dislike' => 0,
            //         'playlist_type' => 1,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 5,
            //         'channel_id' => '3dsvzlwy',
            //         'category_id' => 0,
            //         'language_id' => 0,
            //         'artist_id' => 0,
            //         'hashtag_id' => 0,
            //         'title' => 'Driving Song Playlist',
            //         'description' => 'Driving Song Playlist',
            //         'portrait_img' => '',
            //         'landscape_img' => '',
            //         'content_upload_type' => '',
            //         'content' => '',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 0,
            //         'is_download' => 0,
            //         'is_like' => 0,
            //         'total_view' => 0,
            //         'total_like' => 0,
            //         'total_dislike' => 0,
            //         'playlist_type' => 1,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 6,
            //         'channel_id' => '0',
            //         'category_id' => 1,
            //         'language_id' => 1,
            //         'artist_id' => 1,
            //         'hashtag_id' => 0,
            //         'title' => 'Morning Radio...',
            //         'description' => 'Morning Radio...',
            //         'portrait_img' => 'radiocontent1.jpg',
            //         'landscape_img' => 'radiocontent1.jpg',
            //         'content_upload_type' => '',
            //         'content' => '',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 0,
            //         'is_download' => 0,
            //         'is_like' => 0,
            //         'total_view' => 0,
            //         'total_like' => 0,
            //         'total_dislike' => 0,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            //     [
            //         'content_type' => 6,
            //         'channel_id' => '0',
            //         'category_id' => 2,
            //         'language_id' => 2,
            //         'artist_id' => 2,
            //         'hashtag_id' => 0,
            //         'title' => 'Radio With RJ...',
            //         'description' => 'Radio With RJ...',
            //         'portrait_img' => 'radiocontent2.jpg',
            //         'landscape_img' => 'radiocontent2.jpg',
            //         'content_upload_type' => '',
            //         'content' => '',
            //         'content_size' => '0',
            //         'is_rent' => 0,
            //         'rent_price' => 0,
            //         'is_comment' => 0,
            //         'is_download' => 0,
            //         'is_like' => 0,
            //         'total_view' => 0,
            //         'total_like' => 0,
            //         'total_dislike' => 0,
            //         'playlist_type' => 0,
            //         'is_admin_added' => 1,
            //         'status' => 1,
            //     ],
            // ];
            // Content::insert($content);

            return response()->json(array('status' => 200, 'success' => __('label.controller.data_insert_successfully')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function CleanDatabase()
    {
        try {

            Avatar::query()->truncate();
            Banner::query()->truncate();
            Bookmark::query()->truncate();
            Cast::query()->truncate();
            Category::query()->truncate();
            Channel::query()->truncate();
            Comment::query()->truncate();
            Coupon::query()->truncate();
            Device_Sync::query()->truncate();
            Device_Watching::query()->truncate();
            Download::query()->truncate();
            Home_Section::query()->truncate();
            Language::query()->truncate();
            Like::query()->truncate();
            Notification::query()->truncate();
            Onboarding_Screen::query()->truncate();
            Package::query()->truncate();
            Package_Detail::query()->truncate();
            Producer::query()->truncate();
            Read_Notification::query()->truncate();
            Rent_Price_List::query()->truncate();
            Rent_Transction::query()->truncate();
            Season::query()->truncate();
            Social_Link::query()->truncate();
            Sub_Profile::query()->truncate();
            Transction::query()->truncate();
            TV_Login::query()->truncate();
            TVShow::query()->truncate();
            TVShow_Video::query()->truncate();
            Type::query()->truncate();
            User::query()->truncate();
            Video::query()->truncate();
            Video_Watch::query()->truncate();

            return response()->json(array('status' => 200, 'success' => __('label.controller.data_clean_successfully')));
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }

    public function clearCache()
{
    try {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        
        return response()->json(['status' => 'success', 'message' => 'Cache cleared successfully.']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
}
