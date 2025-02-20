<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'deadline',
        'priority',
        'attachment',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
