<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';
    protected $guarded = array();

    protected $casts = [
        'id' => 'integer',
        'is_home_screen' => 'integer',
        'type_id' => 'integer',
        'video_type' => 'integer',
        'subvideo_type' => 'integer',
        'video_id' => 'integer',
        'status' => 'integer',
    ];

    public function type()
    {
        return $this->belongsTo(VideoType::class, 'type_id');
    }
    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }
}
