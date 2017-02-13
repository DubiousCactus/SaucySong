<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];

    public function styles()
    {
    	return $this->hasMany(Style::class);
    }
}
