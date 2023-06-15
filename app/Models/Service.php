<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
        protected $fillable = [
        'user_id',
        'company_id',
        'title',
        'description',
        'logo',
        'category_id',
        'guide_id',
    ];

    public function company(){
        return $this->belongsTo(
            Company::class,
            'company_id'
        );
    }

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
        return $this->belongsTo(
            Guide::class,
            'guide_id'
        );
    }

    public function reviews(){
        return $this->hasMany(
            Review::class,
        );
    }
}
