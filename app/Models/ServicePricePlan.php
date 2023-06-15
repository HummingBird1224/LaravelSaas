<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePricePlan extends Model
{
    use HasFactory;

    protected $fillable=[
        'service_id',
        'title',
        'price',
        'monthly',
        'initial',
        'min_user',
        'min_usage',
        'description'
    ];

    public function service(){
        return $this->belongsTo(
            Service::class,
            'service_id'
        );
    }
}
