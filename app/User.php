<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function user_banks(){
        return $this->hasMany('App\User_bank','user_id','id');
    }
    public function favorites(){
        return $this->belongsToMany('App\Favorite','favorites','user_id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','user_id','id');
    }
    public function histories(){
        return $this->hasMany('App\History','user_id','id');
    }
    public function payments(){
        return $this->hasMany('App\Payment','user_id','id');
    }

}
