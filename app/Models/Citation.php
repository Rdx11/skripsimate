<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    protected $fillable = [
        'user_id',
        'citation_text',
        'citation_format',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
