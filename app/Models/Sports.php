<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    protected $table = 'sports';

    protected $fillable = [
        'name',
    ];

    public function venues()
    {
        return $this->belongsToMany(Venue::class, 'venue_sports', 'sport_id', 'venue_id')->withTimestamps();
    }
}
