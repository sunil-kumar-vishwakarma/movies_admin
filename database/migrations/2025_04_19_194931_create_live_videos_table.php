<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('ads_video');
            $table->string('ads_interval_video_duration');
            $table->string('category');
            $table->string('language');
            $table->string('cast');
            $table->string('video_duration');
            $table->string('release_date');
            $table->string('producer');
            $table->string('video_upload_type');
            $table->string('is_premium');
            $table->string('is_title');
            $table->string('is_download');
            $table->string('upload_video_320_px');
            $table->string('upload_video_480_px');
            $table->string('upload_video_720_px');
            $table->string('upload_video_1080_px');
            $table->string('trailer_type');
            $table->string('upload_sub_title');
            $table->string('sub_title_type');
            $table->string('first_language_name');
            $table->string('second_language_name');
            $table->string('third_language_name');
            $table->string('first_upload_sub_title');
            $table->string('second_upload_sub_title');
            $table->string('third_upload_sub_title');
            $table->string('second_video_upload_type');
            $table->string('is_rent');
            $table->string('is_comment');
            $table->string('is_like');
            $table->string('thumbnail_image');
            $table->string('landscape_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_videos');
    }
}
