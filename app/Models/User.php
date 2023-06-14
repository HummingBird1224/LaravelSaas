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
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function categories() {
        return $this->hasMany(
            Category::class,
        );
    }

    public function items() {
        return $this->hasMany(
            Item::class,
        );
    }

    public function company() {
        return $this->hasMany(
            Company::class,
        );
    }
}
