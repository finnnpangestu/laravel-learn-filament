<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public static function getRolesByLevel(): array
    {
        return self::query()
            ->orderBy('level')
            ->pluck('level', 'level')
            ->toArray();
    }
}

