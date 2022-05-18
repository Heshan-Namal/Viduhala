<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends Model
{
    use HasFactory;
    protected $table = "Student";

    public function getclassroom()
    {
        return $this->hasOne(\App\Models\Classroom::class);
    }

    public function getgrade()
    {
        return $this->hasOne(\App\Models\Grade::class);
    }

    public function getsubjects()
    {
        return $this->belongsToMany(\App\Models\Subject::class);
    }

    public function getperiods()
    {
        return $this->belongsToMany(\App\Models\Period::class);
    }


}
