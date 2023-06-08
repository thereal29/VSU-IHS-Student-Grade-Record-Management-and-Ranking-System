<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUserMapping extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'student_user_mapping';
    protected $fillable = [
        'user_id',
        'student_id',
    ];
}
