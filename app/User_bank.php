<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_bank extends Model
{
    protected $table = "user_banks";
    public function users(){
        return $this->belongsTo('App\User');
    }
}

