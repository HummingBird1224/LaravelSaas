<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'for_id',
        'data',
        'image',
        'recommended',
        'for',
        'free'
    ];

    public function category(){
        return $this->hasOne(
            Category::class,
        );
    }

    public function service(){
        return $this->hasOne(
            Service::class,
        );
    }
}
