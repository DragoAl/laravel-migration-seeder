<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',  
        'surname',  
        'start_activity',  
        'origin_country',  
        'music_genre',  
        'label'  

    ];
}
