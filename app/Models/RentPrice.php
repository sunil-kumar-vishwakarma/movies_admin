<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'android_product_package',
        'ios_product_package',
        'web_price_id'
        ];
}
