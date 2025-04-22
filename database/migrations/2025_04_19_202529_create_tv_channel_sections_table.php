<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvChannelSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_channel_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_title');
            $table->string('sub_video_type');
            $table->string('category');
            $table->string('language');
            $table->string('channel');
            $table->string('screen_layout');
            $table->string('number_of_content');
            $table->string('order_by_upload');
            $table->string('order_by_like');
            $table->string('order_by_view');
            $table->string('rent_video');
            $table->string('view_all');
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
        Schema::dropIfExists('tv_channel_sections');
    }
}
