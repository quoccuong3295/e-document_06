<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function documents(){
        return $this->belongsTo('App\Document');
    }
}

