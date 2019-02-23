<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'gender', 'instance', 'email', 'phone_number', 'address', 'type', 'workshop'
    ];

    public function scopeNewParticipants($query)
    {
        return $query->where('payment', false)->orderBy('created_at', 'desc');
    }

    public function scopeSeminar($query)
    {
        return $query->where('type', 'Seminar')->where('payment', true);
    }

    public function scopeWorkshop($query)
    {
        return $query->where('type', 'Workshop')->where('payment', true);
    }

    public function scopeCertainWorkshop($query, $workshop)
    {
        return $query->where('type', 'Workshop')->where('workshop', $workshop)->where('payment', true);
    }
}
