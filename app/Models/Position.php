<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $fillable = [
        'name',
        'college_id',
    ];

    // Relationship: Belongs To
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
