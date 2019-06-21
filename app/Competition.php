<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'team_name', 'leader_name', 'leader_gender', 'email', 'phone_number',
        'instance', 'member_1', 'member_2', 'member_3', 'member_4', 'member_5'
    ];

    public function scopeNewTeam($query)
    {
        return $query->where('payment', false)->orderBy('created_at', 'desc');
    }

    public function scopeTeam($query)
    {
        return $query->where('payment', true)->orderBy('created_at', 'desc');
    }
}
