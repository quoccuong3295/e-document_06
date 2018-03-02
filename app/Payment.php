<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";
    public function users(){
        return $this -> belongsTo('App\User');
    }
}
