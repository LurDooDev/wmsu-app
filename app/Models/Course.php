<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'name',
        'college_id',
    ];

    // Relationship Has Many
    public function students()
    {
        return $this->hasMany(Student::class, 'course_id', 'id');
    }

    // Inverse Relationship
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
