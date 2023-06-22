<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    use HasFactory;
    protected $table = 'about_settings';

    protected $fillable = [
        'description',
        'title',
        'title_description',
        'birth_date',
        'age',
        'website',
        'degree',
        'phone',
        'email',
        'city',
        'freelance',
        'image',
    ];
}
