<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummarySetting extends Model
{
    use HasFactory;
    protected $table = 'summary_settings';

    protected $fillable = [
        'title',
        'description',
        'address',
        'contact',
        'email',
    ];
}
