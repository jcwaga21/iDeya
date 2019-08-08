<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;

class AdminBudget extends Model
{
    protected $guarded = [];

    public function getTotalAmountAttribute()
    {
        return $this->no_of_items * $this->amount;
    }
}
