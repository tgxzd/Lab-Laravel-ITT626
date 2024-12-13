<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public $table = 'halls';

    protected $fillable = [
        'lecture_hall_name',
        'lecture_hall_place',
        'capacity'
    ];
}
