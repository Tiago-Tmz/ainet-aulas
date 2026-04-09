<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'course',
        'year',
        'semester',
        'abbreviation',
        'name',
        'name_pt',
        'ECTS',
        'hours',
        'optional',
    ];
}
