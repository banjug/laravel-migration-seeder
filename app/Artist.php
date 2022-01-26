<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'name',
        'birthday',
        'nationality',
        'debut_year',
        'label',
    ];
}
