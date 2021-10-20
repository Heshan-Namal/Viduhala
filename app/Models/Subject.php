<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "Subject";

    public function getclasses()
    {
        // need to declare relation and object tables
        return $this->belongsToMany(\App\Models\Subject::class,\App\Models\Subject_classroom::class);

    }
}
