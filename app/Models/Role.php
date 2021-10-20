<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $table = "Role";

    protected $fillable = ['id','name'];

    public function teacher()
    {
        return $this->belongsToMany(\App\Models\Teacher::class,\App\Models\Teacher_role::class);
    }
}
