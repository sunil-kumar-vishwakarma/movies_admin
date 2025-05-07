<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_id',
        'name',
        'start_date',
        'end_date',
        'amount_type',
        'price',
        'is_use',
        ];
    
}
