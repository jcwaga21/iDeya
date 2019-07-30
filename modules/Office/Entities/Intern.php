<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $guarded = [];

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
