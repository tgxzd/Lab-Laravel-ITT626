<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    public $table = 'timetables';

    protected $fillable = [
        'user_id',
        'subject_id',
        'day_id',
        'hall_id',
        'group_id',
        'time_from',
        'time_to',
    ];
        

    
}
