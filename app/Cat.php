<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Cat extends Model
{
    protected $fillable = ['name', 'age', 'gender'];
}
