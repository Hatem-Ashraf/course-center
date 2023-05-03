<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['CourseId'];
    protected $primaryKey = 'CourseId';

    public $timestamps = false;

    public function cycles()
    {
        return $this->hasMany(CourseCycles::class, 'CoursesId', 'CourseId');
    }
}
