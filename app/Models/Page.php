<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';
    // protected $guarded = array();

    protected $fillable = [
        'page_name',
        'title',
        'description',
        'subtitle',
        'icon',
        'status',
    ];
}
