<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'department_id', 'created_by', 'assigned_to'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // public function creator()
    // {
    //     return $this->belongsTo(User::class, 'created_by');
    // }

    // public function assignee()
    // {
    //     return $this->belongsTo(User::class, 'assigned_to');
    // }

    // public function workflows()
    // {
    //     return $this->hasMany(Workflow::class);
    // }

    public function detail()
    {
        return $this->hasOne(TaskDetail::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

}
