<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    use HasFactory;

    protected $table = 'watch_lists'; // Assuming table name is 'watch_lists'

    protected $fillable = [
        'user_id',
        'video_id',
    ];

    // A WatchList belongs to a Video
    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }

    // A WatchList belongs to a User (optional, if you want)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
