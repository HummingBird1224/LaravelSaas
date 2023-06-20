<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'kana_first',
        'kana_last',
        'email',
        'password',        
        '_token',
        'role',  
        'phone_number',
        'avatar',
        'company_name',
        'corporation_scale',
        'business_type',
        'prefecture',
        'address',
        'department',
        'official_position',
        'rejected_reason'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }    

    public function reviews(){
        return $this->hasMany(
            Review::class,
        );
    }

    public function company() {
        return $this->hasOne(
            Company::class,
        );
    }

    public function up_service()
    {
        return $this->belongsToMany(Service::class)->wherePivot('action', 'up')->withTimestamps();
    }

    public function down_services()
    {
        return $this->belongsToMany(Service::class)->wherePivot('action', 'down')->withTimestamps();
    }

    public function guides()
    {
        return $this->belongsToMany(Guide::class, 'user_guide');
    }
}
