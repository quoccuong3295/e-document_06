<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";
    public function histories(){
        return $this->belongsToMany('App\History');
    }
    public function comments(){
        return $this->hasMany('App\Comments','document_id','id');
    }
    public function categories(){
        return $this->belongsTo('App\Category');
    }
    public function favorites(){
        return $this->belongsToMany('App\Favorite');
    }
}

