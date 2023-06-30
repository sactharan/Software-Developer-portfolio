<?php

namespace App\Models;

use App\Models\CategorySetting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'status',
    ];

    public function category(){
        return $this->belongsTo(CategorySetting::class,'category_id','id');
    }
}
