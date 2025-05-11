<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\VideoType;
use App\Models\Category;
use App\Models\RentPrice;
use App\Models\AdsVideo;
use App\Models\Language;
use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller
{
    public function videos()
    {
        $videos = Video::orderBy('id','desc')->get();
       

        return view('admin.videos.videos', compact('videos'));
    }
    public function addvideos()
    {
        $types = VideoType::all();
        $category = Category::all();
        $rentPrice = RentPrice::all();
        $adsVideo = AdsVideo::all();
        $language = Language::all();
        $cast = Cast::all();
// dd($category);
        return view('admin.videos.addvideo',compact('types','category','rentPrice','adsVideo','language', 'cast'));
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
        

        $request->validate([
            'name' => 'required|string',
            'thumbnail_image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('name',
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


    // public function store(Request $request)
    // {
    //     try {

    //         $validator = Validator::make($request->all(), [
    //             'name' => 'required|min:2',
    //             'category_id' => 'required',
    //             'language_id' => 'required',
    //             'cast_id' => 'required',
    //             'type_id' => 'required',
    //             'video_upload_type' => 'required',
    //             'trailer_type' => 'required',
    //             'subtitle_type' => 'required',
    //             'description' => 'required',
    //             'video_duration' => 'required|after_or_equal:00:00:01',
    //             'is_premium' => 'required',
    //             'is_title' => 'required',
    //             'is_download' => 'required',
    //             'is_like' => 'required',
    //             'is_comment' => 'required',
    //             'is_rent' => 'required',
    //             'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
    //             'landscape' => 'image|mimes:jpeg,png,jpg|max:2048',
    //         ]);
    //         if ($validator->fails()) {
    //             $errs = $validator->errors()->all();
    //             return response()->json(array('status' => 400, 'errors' => $errs));
    //         }

    //         if ($request->video_upload_type == "server_video") {
    //             $validator1 = Validator::make($request->all(), [
    //                 'video_320' => 'required',
    //             ]);
    //         } else {
    //             $validator1 = Validator::make($request->all(), [
    //                 'video_url_320' => 'required',
    //             ]);
    //         }
    //         if ($validator1->fails()) {
    //             $errs1 = $validator1->errors()->all();
    //             return response()->json(array('status' => 400, 'errors' => $errs1));
    //         }

    //         $category_id = implode(',', $request->category_id);
    //         $language_id = implode(',', $request->language_id);
    //         $cast_id = implode(',', $request->cast_id);

    //         $video = new Video();
    //         $video->type_id = $request->type_id;
    //         $video->video_type = 1;
    //         $video->ads_video_id = $request->ads_video_id ? $request->ads_video_id :0;
    //         $video->adsvideo_duration = $request->adsvideo_duration ? $request->adsvideo_duration :0;
    //         $video->channel_id = 0;
    //         $video->producer_id = isset($request->producer_id) ? $request->producer_id : 0;
    //         $video->category_id = $category_id;
    //         $video->language_id = $language_id;
    //         $video->cast_id = $cast_id;
    //         $video->name = $request->name;
    //         $video->video_upload_type = $request->video_upload_type;
    //         $video->description = $request->description;
    //         $video->is_premium = $request->is_premium;
    //         $video->is_title = $request->is_title;
    //         if ($request->video_upload_type == "server_video") {
    //             $video->is_download = $request->is_download;
    //         } else {
    //             $video->is_download = 0;
    //         }
    //         $video->is_like = $request->is_like;
    //         $video->is_comment = $request->is_comment;
    //         $video->total_like = 0;
    //         $video->total_view = 0;
    //         $video->status = 1;
    //         $video->video_duration = Time_To_Milliseconds($request->video_duration);
    //         $video->release_date = "";
    //         if ($request->release_date) {
    //             $video->release_date = $request->release_date;
    //         }

    //         // Video (320, 480, 720, 1080)
    //         if ($request->video_upload_type == "server_video") {

    //             $video->video_320 = isset($request->video_320) ? $request->video_320 : '';
    //             $video->video_480 = isset($request->video_480) ? $request->video_480 : '';
    //             $video->video_720 = isset($request->video_720) ? $request->video_720 : '';
    //             $video->video_1080 = isset($request->video_1080) ? $request->video_1080 : '';

    //             $array = explode('.', $request->video_320);
    //             $video->video_extension = end($array);
    //         } else {

    //             $video->video_320 = isset($request->video_url_320) ? $request->video_url_320 : '';
    //             $video->video_480 = isset($request->video_url_480) ? $request->video_url_480 : '';
    //             $video->video_720 = isset($request->video_url_720) ? $request->video_url_720 : '';
    //             $video->video_1080 = isset($request->video_url_1080) ? $request->video_url_1080 : '';

    //             $array = explode('.', $request->video_url_320);
    //             $array1 = explode('?', end($array));
    //             if (isset($array1) && $array1 != null) {
    //                 $video->video_extension = isset($array1) ? reset($array1) : "";
    //             } else {
    //                 $video->video_extension = "";
    //             }
    //         }

    //         // Subtitle_1_2_3
    //         $video->subtitle_type = isset($request->subtitle_type) ? $request->subtitle_type : '';
    //         $video->subtitle_lang_1 = isset($request->subtitle_lang_1) ? $request->subtitle_lang_1 : '';
    //         $video->subtitle_lang_2 = isset($request->subtitle_lang_2) ? $request->subtitle_lang_2 : '';
    //         $video->subtitle_lang_3 = isset($request->subtitle_lang_3) ? $request->subtitle_lang_3 : '';
    //         if ($request->subtitle_type == "server_video") {
    //             $video->subtitle_1 = isset($request->subtitle_1) ? $request->subtitle_1 : '';
    //             $video->subtitle_2 = isset($request->subtitle_2) ? $request->subtitle_2 : '';
    //             $video->subtitle_3 = isset($request->subtitle_3) ? $request->subtitle_3 : '';
    //         } else {
    //             $video->subtitle_1 = isset($request->subtitle_url_1) ? $request->subtitle_url_1 : '';
    //             $video->subtitle_2 = isset($request->subtitle_url_2) ? $request->subtitle_url_2 : '';
    //             $video->subtitle_3 = isset($request->subtitle_url_3) ? $request->subtitle_url_3 : '';
    //         }

    //         // Trailer
    //         $video->trailer_type = isset($request->trailer_type) ? $request->trailer_type : '';
    //         if ($request->trailer_type == "server_video") {
    //             $video->trailer_url = isset($request->trailer) ? $request->trailer : '';
    //         } else {
    //             $video->trailer_url = isset($request->trailer_url) ? $request->trailer_url : '';
    //         }

    //         $org_name = $request->file('thumbnail');
    //         $org_name1 = $request->file('landscape');
    //         $video->thumbnail = "";
    //         $video->landscape = "";
    //         if ($org_name != null && isset($org_name)) {

    //             $video->thumbnail = $this->common->saveImage($org_name, $this->folder_content, 'vid_');
    //         } elseif ($request->thumbnail_tmdb) {

    //             $url = $request->thumbnail_tmdb;
    //             $S_Name = $this->common->URLSaveInImage($url, $this->folder_content, 'vid_');
    //             $video->thumbnail = $S_Name;
    //         }
    //         if ($org_name1 != null && isset($org_name1)) {

    //             $video->landscape = $this->common->saveImage($org_name1, $this->folder_content, 'vid_');
    //         } elseif ($request->landscape_tmdb) {

    //             $url = $request->landscape_tmdb;
    //             $S_Name = $this->common->URLSaveInImage($url, $this->folder_content, 'vid_');
    //             $video->landscape = $S_Name;
    //         }

    //         // Rent
    //         $video->is_rent = $request->is_rent;
    //         $video->price = isset($request->price) ? $request->price : 0;
    //         $video->rent_day = isset($request->rent_day) ? $request->rent_day : 0;

    //         if ($video->save()) {

    //             // Send Notification
    //             $imageURL = $this->common->getImage($this->folder_content, $video->thumbnail, 'normal');
    //             $noti_array = array(
    //                 'id' => $video->id,
    //                 'name' => $video->name,
    //                 'image' => $imageURL,
    //                 'type_id' => $video->type_id,
    //                 'video_type' => $video->video_type,
    //                 'upcoming_type' => 0,
    //                 'description' => String_Cut($video->description, 90),
    //             );
    //             $this->common->sendNotification($noti_array);

    //             return response()->json(array('status' => 200, 'success' => __('label.controller.data_add_successfully')));
    //         } else {
    //             return response()->json(array('status' => 400, 'errors' => __('label.controller.data_not_added')));
    //         }
    //     } catch (Exception $e) {
    //         return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
    //     }
    // }

     public function saveChunk()
    {

        @set_time_limit(5 * 60);

        $targetDir = storage_path('/app/public/content');
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds

        // Create target dir
        if (!file_exists($targetDir)) {
            @mkdir($targetDir);
        }

        // Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }
        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

        // Chunk information
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;

        // Remove old temp files
        if ($cleanupTargetDir && is_dir($targetDir) && $dir = opendir($targetDir)) {
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // Remove temp file if it is older than the max age and not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        } else {
            die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
        }

        // Open temp file
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }

            // Read binary input stream and append it to temp file
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

        // Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);

            // Generate a new filename based on the current date and time
            $extension = pathinfo($fileName, PATHINFO_EXTENSION); // Get the file extension from the original filename
            $newFileName = 'vid' . date('_d_m_Y_') . rand(1111, 9999) . '.' . $extension; // Use the extracted extension
            $newFilePath = $targetDir . DIRECTORY_SEPARATOR . $newFileName;

            // Rename the uploaded file to the new filename
            rename($filePath, $newFilePath);

            // Send the new file name back to the client
            die(json_encode(array('jsonrpc' => '2.0', 'result' => $newFileName, 'id' => 'id')));
        }

        // Return Success JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }
    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $types = VideoType::all();
        $category = Category::all();
        $rentPrice = RentPrice::all();
        $adsVideo = AdsVideo::all();
        $language = Language::all();
        $cast = Cast::all();

        return view('admin.videos.edit', compact('video','types','category','rentPrice','adsVideo','language', 'cast'));

        
    }

    public function update(Request $request,  $id)
    {

         $data = $request->only('name',
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
        
        $video=Video::find($id);
        $video->update($data);

        return redirect()->route('admin.videos.videos')->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.videos')->with('success', 'Video deleted successfully.');
    }
}