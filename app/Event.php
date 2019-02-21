<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'jenis_kelamin', 'instance', 'email', 'no_hp', 'address', 'type', 'workshop'
    ];

    public function scopeSeminar($query)
    {
        return $query->where('type', 'Seminar')->where('status', true);
    }

    public function scopeWorkshop($query, $workshop)
    {
        return $query->where('type', 'Workshop')->where('workshop', $workshop)->where('status', true);
    }
}
