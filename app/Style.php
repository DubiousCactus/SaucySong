<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $fillable = ['name'];

    public function genre()
    {
    	return $this->belongsTo(Genre::class);
    }

    public function songs()
    {
    	return $this->belongsToMany(Song::class);
    }
}
