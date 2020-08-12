<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'name',
        'cost',
        'work_type',
        'company_id',
        'worker_id',
        'work_shift_id',
        'date'
    ];
    public $timestamps = false;
}
