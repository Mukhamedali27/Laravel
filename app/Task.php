<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //те атрибуты которые разришаются заполнятся
    protected $fillable=['title','description'];
}
