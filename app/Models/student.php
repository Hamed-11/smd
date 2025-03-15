<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duration'];
    // رابطه با مدل Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
