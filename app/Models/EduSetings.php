<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduSetings extends Model
{
    use HasFactory;
    protected $table = 'edu_settings';

    protected $fillable = [

        'title',
        'university',
        'start_to',
        'end_to',
        'description',
        'status',
    ];
}
