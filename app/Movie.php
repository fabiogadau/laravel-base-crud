<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Fillable records
    protected $fillable = [
        'title',
        'genre',
        'description',
        'release_date'
    ];
}
