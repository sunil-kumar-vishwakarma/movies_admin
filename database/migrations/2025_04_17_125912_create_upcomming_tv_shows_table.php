<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpcommingTvShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcomming_tv_shows', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('category');
            $table->string('language');
            $table->string('cast');
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
            $table->string('description');
            $table->string('first_is_premium');
            $table->string('first_is_title');
            $table->string('first_is_download');
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
        Schema::dropIfExists('upcomming_tv_shows');
    }
}
