<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['song_id'];

    public function song()
    {
    	return $this->belongsTo(Song::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
