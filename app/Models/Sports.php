<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    protected $table = 'sports';

    protected $fillable = [
        'name',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
