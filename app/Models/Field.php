<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $table = 'field';

    protected $fillable = [
        'name',
        'image',
        'venue_id',
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
