<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = "histories";
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function documents(){
        return $this->belongsToMany('App\Document');
    }
}

