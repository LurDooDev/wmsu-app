<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $table = 'colleges';

    protected $fillable = [
        'code',
        'name',
    ];

    // Relationship: Has Many
    public function courses()
    {
        return $this->hasMany(Course::class, 'college_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'college_id', 'id');
    }

    public function positions()
    {
        return $this->hasMany(Position::class, 'college_id', 'id');
    }
}
