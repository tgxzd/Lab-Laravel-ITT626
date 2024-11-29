<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public $table = 'halls';

    protected $fillable = [
        'lecturer_hall_name',
        'lecturer_hall_place'

    ];
}
