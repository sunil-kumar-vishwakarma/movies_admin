<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcommingTvShow extends Model
{
    use HasFactory;
    protected $fillable = [
        'movies_name',
        'type',
        'category',
        'language',
        'cast',
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
        'description',
        'first_is_premium',
        'first_is_title',
        'first_is_download',
        'is_like',
        'thumbnail_image',
        'landscape_image',
    ];
}
