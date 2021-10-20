<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = "Period";
    protected $casts=[
        'links'=>'array',
        'notes'=>'array'
    ];
}
