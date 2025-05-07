<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'upload_video',
        'category',
        'language',
        'thumbnail_image',
        'landscape_image',
        ];
}
