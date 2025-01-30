<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Venue extends Model
{
    protected $table = 'venue';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'large_image',
        'logo_image',
        'city',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($venue) {
            $venue->slug = Str::slug($venue->name);
        });
    }

    public function fields()
    {
        return $this->hasMany(Field::class, 'venue_id');
    }

    public function sports()
    {
        return $this->belongsToMany(Sports::class, 'venue_sports', 'venue_id', 'sport_id')->withTimestamps();
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'venue_id');
    }
}
