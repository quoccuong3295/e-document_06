<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
