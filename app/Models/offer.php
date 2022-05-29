<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    protected $table = "offers";
    protected $fillable = ['name_ar', 'photo', 'name_en', 'price', 'details_ar', 'details_en', 'created_at', 'updated_at', 'status'];
    protected $hidden = ['created_at', 'updated_at'];

}
