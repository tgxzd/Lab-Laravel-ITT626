<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{


    public $table = 'groups';

    protected $fillable = [
        'name',
        'part',

    ];
}
