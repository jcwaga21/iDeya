<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;
use App\EventParticipant;
use App\EventBudget;
use App\EventType;
use App\Budget;

class AdminEvent extends Model
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
