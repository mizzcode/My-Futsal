<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'venue';

    protected $fillable = [
        'name',
        'image',
        'sports_id',
    ];

    public function field()
    {
        return $this->hasMany(Field::class, 'venue_id');
    }

    public function sports()
    {
        return $this->belongsTo(Sports::class);
    }
}
