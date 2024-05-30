<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'position',
        'hire_date',
    ];

    protected $dates = [
        'hire_date',
    ];

    protected $attributes = [
        'position' => 'unknown',
    ];

    protected $casts = [
        'hire_date' => 'date',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'employee_skill');
    }
}
