<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $table = "coins";
    public function payments(){
        return $this->belongsTo('App\Payment');
    }
}
