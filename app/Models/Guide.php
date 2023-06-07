<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'material',
        'image',
    ];

    public function services(){
        return $this->hasMany(
            Company::class,
        );
    }
}
