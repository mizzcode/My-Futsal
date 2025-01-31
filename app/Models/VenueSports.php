<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VenueSports extends Model
{

    protected $table = 'venue_sports';

    protected $fillable = [
        'venue_id',
        'sport_id',
    ];

}
