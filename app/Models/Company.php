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
        'source',
        'name',
        'employee_number',
        'industry',
        'logo',
        'location',
        'address',
        'representative',
        'phone_number',
        'founded_year',
        'founded_month',
        'capital',
        'company_url',
        'department',
        'job_title',
    ];

    public function user() {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }
}
