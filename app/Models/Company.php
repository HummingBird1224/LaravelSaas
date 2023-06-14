<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Model
{
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    protected $fillable=[
        'user_id',
        'name',
        'corporation_scale',
        'business_type',
        'logo',
        'prefecture',
        'address',
        'representative',
        'phone_number',
        'founded_year',
        'founded_month',
        'capital',
        'company_url',
    ];

    public function user() {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }
}
