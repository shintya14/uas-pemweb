<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'lecturer_code',
        'lecturer_name',
        'study_program',
        'campus_base',
    ];


}
