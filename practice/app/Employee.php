<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $failable = ['id', 'dept_id', 'name', 'email'];
    protected $table='employee';
    public $timestamps = false;
}
