<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    // Mass assignement

    protected $fillable = [
        'author',
        'title',
        'body',
    ];
}
