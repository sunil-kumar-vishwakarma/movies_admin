<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
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
        'thumbnail_image',
        'landscape_image',
    ];
}
