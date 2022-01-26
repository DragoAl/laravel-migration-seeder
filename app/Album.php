<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name',
        'exit_date',
        'genre',
        'album_type',
        'sales',
        'views',
        'cover',
        'record_company'
    ];
}
