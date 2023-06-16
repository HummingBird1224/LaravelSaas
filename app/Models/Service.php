<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
        protected $fillable = [
        'user_id',
        'title',
        'description',
        'logo',
        'category_id',
        'guide_id',
        'recommended'
    ];

    public function user(){
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }

    public function category(){
        return $this->belongsTo(
            Category::class,
            'category_id'
        );
    }

    public function guide(){
        return $this->hasOne(
            Guide::class,
            'id',
            'guide_id'
        );
    }

    public function reviews(){
        return $this->hasMany(
            Review::class,
        );
    }

    public function uis(){
        return $this->hasMany(
            ServiceUI::class,
        );
    }

    public function prices(){
        return $this->hasMany(
            ServicePricePlan::class,
        );
    }
}
