<?php

namespace App\Models;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorySetting extends Model
{
    use HasFactory;
    protected $table = 'portfolio_category';

    protected $fillable = [

        'title',
        'status',
    ];

    public function portfolios()
    {

        return $this->hasMany(Portfolio::class,'category_id','id');
    }



}
