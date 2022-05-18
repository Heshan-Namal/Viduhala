<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Period extends Model
{
    use HasFactory;

    protected $table = "Period";
    protected $casts=[
        'links'=>'array',
        'notes'=>'array'
    ];

    public function getstudents()
    {
        // need to declare relation and object tables
        return $this->belongsToMany(\App\Models\Student::class);

    }
}
