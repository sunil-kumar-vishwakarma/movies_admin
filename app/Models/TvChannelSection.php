<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvChannelSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_title',
        'sub_video_type',
        'category',
        'language',
        'channel',
        'screen_layout',
        'number_of_content',
        'order_by_upload',
        'order_by_like',
        'order_by_view',
        'premium_video',
        'rent_video',
        'view_all',
        ];
}
