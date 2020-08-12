<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkShift extends Model
{
    protected $table = 'work_shifts';
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
}
