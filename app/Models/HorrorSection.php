<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorrorSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_title',
        'category',
        'language',
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
