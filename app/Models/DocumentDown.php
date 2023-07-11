<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentDown extends Model
{
    use HasFactory;

    protected $table = 'document_downs';

    protected $fillable = [
        'user_id',
        'guide_id',
        'service_id',
        'down_link'
    ];
}
