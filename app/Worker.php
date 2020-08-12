<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';
    protected $fillable = [
        'email',
        'name',
        'surname',
        'patronymic',
        'company_id',
        'fio'
    ];
    public $timestamps = false;

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
