<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = "phone";
    protected $fillable = ['code', 'phone'];
    protected $hidden =['user_id'];
    public $timestamps=false;


    /****** Relation  ***************/
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
