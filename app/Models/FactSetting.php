<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactSetting extends Model
{
    use HasFactory;

    protected $table = 'fact_settings';

    protected $fillable = [
        'clients',
        'projects',
        'hours_of_support',
        'hard_workers',
    ];
}
