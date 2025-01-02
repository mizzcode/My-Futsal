<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    protected $fillable = [
        'date',
        'status',
        'price',
        'field_id',
        'user_id',
    ];

    public function field()
    {
        return $this->hasMany(Field::class, 'field_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
};
