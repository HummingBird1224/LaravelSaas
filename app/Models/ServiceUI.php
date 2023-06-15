<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceUI extends Model
{
    use HasFactory;

    protected $fillable=[
        'service_id',
        'portfolio',
        'description',
    ];

    public function service(){
        return $this->belongsTo(
            Service::class,
            'service_id'
        );
    }
}
