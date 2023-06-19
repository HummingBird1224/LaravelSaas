<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'guide_id',
        'success_method',
        'large_category_id',
        'issue_id',
        'necessary_points',
        'good_points',
        'bad_points',
        'comparison_points',
    ];

     public function scopeAvgscore($query)
    {
        return  $query->with('reviews')
                ->where('status', 'approved')
                ->avg('score');
    } 
    
    public function large_category() {
        return $this->belongsTo(
            LargeCategory::class,
            'large_category_id'
        );
    }

    public function issue() {
        return $this->belongsTo(
            Issue::class,
            'issue_id'
        );
    }

    public function guide() {
        return $this->hasOne(
            Guide::class,
            'id',
            'guide_id'
        );
    }
}
