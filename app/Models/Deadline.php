<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    protected $fillable = [
        'task_id',
        'due_date',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
