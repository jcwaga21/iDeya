<?php

namespace App;

use App\EventParticipant;
use App\EventBudget;
use App\EventType;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function eventParticipants()
    {
        return $this->hasMany(EventParticipant::class, 'event_id');
    }

    public function eventBudget()
    {
        return $this->hasOne(EventBudget::class, 'event_id');
    }

    public function eventType()
    {
        return $this->belongsTo(EventType::class, 'type_id');
    }
}
