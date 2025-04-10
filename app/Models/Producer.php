<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Producer extends Authenticatable
{
    use HasFactory;
   
    protected $fillable = ['user_name', 'image', 'full_name','email', 'password','phone','company','genre','otp'];
}
