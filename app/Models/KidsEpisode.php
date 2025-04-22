<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KidsEpisode extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'season',
        'video_upload_type',
        'is_premium',
        'is_title',
        'is_download',
        'is_like',
        'upload_video_320_px',
        'upload_video_480_px',
        'upload_video_720_px',
        'upload_video_1080_px',
        'sub_title_type',
        'first_language_name',
        'second_language_name',
        'third_language_name',
        'first_upload_sub_title',
        'second_upload_sub_title',
        'third_upload_sub_title',
        'video_duration',
        'thumbnail_image',
        'description',
        'landscape_image',
        'kids_id',
    ];

}
