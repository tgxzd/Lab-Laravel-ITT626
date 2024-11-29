<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $table = 'days';

    protected $fillable = [
        'day_name',

    ];
}
