<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNecessaryPoint extends Model
{
    use HasFactory;

    protected $fillable=[
        'category_id',
        'title',
        'contents'
    ];

    public function category(){
        return $this->belongsTo(
            Category::class,
            'category_id'
        );
    }
}
