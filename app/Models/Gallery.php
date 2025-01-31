<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['venue_id', 'image'];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}