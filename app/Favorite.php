<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = "favorites";
    public function documents(){
        return $this->belongsToMany('App\Document');
    }
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
