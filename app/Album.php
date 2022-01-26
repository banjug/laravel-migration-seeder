<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [

        'title_album',
        'release_date',
        'year_recorded',
        'tracks',
        'artist',
        'producer',
        'description',
        'genre',
    ];
}
