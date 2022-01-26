<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'exit_date',
        'playback_counter',
        'duration',
        'sales',
        'text_song',
        'rating',
        'explicit'
    ];
    
    
}
