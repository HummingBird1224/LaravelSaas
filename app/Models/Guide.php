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
        return $this->belongsTo(
            Category::class,
            'category_id'
        );
    }

    public function services(){
        return $this->hasMany(
            Service::class,
        );
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_guide');
    }
}
