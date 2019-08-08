<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;

class AdminEventBudget extends Model
{
    protected $guarded = [];

    public function budget()
    {
        return $this->belongsTo(Budget::class, 'id');
    }
}
