<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProSettings extends Model
{
    use HasFactory;

    protected $table = 'professional_settings';

    protected $fillable = [

        'title',
        'address',
        'start_to',
        'end_to',
        'point1',
        'point2',
        'point3',
        'point4',
        'status',
    ];
}
