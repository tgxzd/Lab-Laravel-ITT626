<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = 'subjects';

    protected $fillable = [
        'subject_code',
        'subject_name',
        'lecturer_name',
        
    ];
}
