<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'courseId', 'link', 'description', 'professors'
    ];
}
