<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'activity' => 'boolean'
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
