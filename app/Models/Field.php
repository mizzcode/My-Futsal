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

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'field_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
