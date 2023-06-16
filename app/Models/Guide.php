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
        'data',
        'image',
        'recommended',
        'free'
    ];

    public function category(){
        return $this->belongsTo(
            Category::class,
            'id',
            'guide_id'
        );
    }

    public function service(){
        return $this->belongsTo(
            Service::class,
            'id',
            'guide_id'
        );
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_guide');
    }
}
