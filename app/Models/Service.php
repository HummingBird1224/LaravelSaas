<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
        protected $fillable = [
        'user_id',
        'title',
        'description',
        'logo',
        'guide_id',
        'recommended',
        'data',
        'data_title'
    ];

    public function scopeReviewAvgCount($query)
    {
        return  
            $query  -> withCount(['reviews'=>function($query){$query->where('status', 'approved');}])
                    -> withAvg(['reviews'=>function($query){$query->where('status', 'approved');}],  'score');
    }    


    public function up_user()
    {
        return $this->belongsToMany(User::class)->wherePivot('action', 'up');
    }

    public function down_users()
    {
        return $this->belongsToMany(User::class)->wherePivot('action', 'down');
    }

    public function guide(){
        return $this->belongsTo(
            Guide::class,
            'guide_id',
            'id'
        );
    }

    public function reviews(){
        return $this->hasMany(
            Review::class,
        );
    }

    public function uis(){
        return $this->hasMany(
            ServiceUI::class,
        );
    }

    public function prices(){
        return $this->hasMany(
            ServicePricePlan::class,
        );
    }
}
