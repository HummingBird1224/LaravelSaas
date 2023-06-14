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
    ];

    public function user() {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }

    public function guide() {
        return $this->hasOne(
            Guide::class,
            'guide_id'
        );
    }
}
