<?php

namespace App\Models;

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
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function user_banks()
    {
        return $this->hasMany(User_bank::class, 'user_id', 'id');
    }
    public function favorites()
    {
        return $this->belongsToMany(Favorite::class, 'favorites', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }
    public function histories()
    {
        return $this->hasMany(History::class, 'user_id', 'id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id', 'id');
    }
}
