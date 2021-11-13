<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // need to declare table in model
    protected $table = "Teacher";
    // this is not necessary
    protected $guarded=[];


    public function role()
    {
        // need to declare relation and object table
        return $this->belongsToMany(\App\Models\Role::class,\App\Models\Teacher_role::class);
        // "role_user" is table name
        // OR if we have model RoleUser, then we can use class
        // instead of table name role_user
        //return $this->belongsToMany(Role::class, RoleUser::class);
    }
    
    // get teacher teaching classrooms
    public function getclassroom(){
        return $this->hasOne(\App\Models\Classroom::class);
    }
    
    //grade incharge(role based teacher) can get own grade 
    public function getgrade(){
        return $this->hasOne(\App\Models\Grade::class);
    }

    public function grade()
    {
        // need to declare relation and object tables
        return $this->belongsToMany(\App\Models\Grade::class,\App\Models\Grade_teacher::class);

    }

    public function getclasses()
    {
        // need to declare relation and object tables
        return $this->belongsToMany(\App\Models\Classroom::class,\App\Models\Teacher_classroom::class);

    }

    
}
