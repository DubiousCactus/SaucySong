<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'artist', 'description', 'url'];

    public function sharer()
    {
    	return $this->belongsTo(User::class);
    }

    public function styles()
    {
    	return $this->belongsToMany(Style::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function likes()
    {
    	return $this->hasMany(Like::class);
    }
}
