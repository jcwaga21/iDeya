<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $guarded = [];

    public function getTotalAmountAttribute()
    {
    	return $this->no_of_items * $this->amount;
    }
}
