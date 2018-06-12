<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;

    public function employee()
    {
        return $this->hasMany('App\Employee');//Company has many employees
    }
}
