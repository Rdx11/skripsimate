<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlagiarismeChek extends Model
{
    protected $fillable = [
        'user_id',
        'document_path',
        'result',
        'similarity_percentage',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
