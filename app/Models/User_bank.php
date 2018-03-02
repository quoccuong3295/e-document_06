<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_bank extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

