<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'user_id',
        'company_id',
        'title',
        'description',
        'effect_after_implementation',
        'score',
        'status',
    ];

    public function scopePublishing($query){
        return $query->where('status', 0);
    }

    public function scopePublished($query){
        return $query->where('status', 1);
    }

    public function user(){
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }

     public function company(){
        return $this->belongsTo(
            Company::class,
            'company_id'
        );
    }

    public function service(){
        return $this->belongsTo(
            Service::class,
            'service_id'
        );
    }
}
