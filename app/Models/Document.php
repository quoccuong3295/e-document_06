<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function histories()
    {
        return $this->belongsToMany(History::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'document_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }
}

