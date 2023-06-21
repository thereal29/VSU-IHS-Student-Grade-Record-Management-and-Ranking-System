<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumGrades extends Model
{
    use HasFactory;
    protected $table = 'grades_per_subject';
    protected $fillable = [
        'id',
        'student_id',
        'subject_id',
        'sy_id',
        'remarks',
    ]; 
}
