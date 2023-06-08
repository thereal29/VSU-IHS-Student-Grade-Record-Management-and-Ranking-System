<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyStaffUserMapping extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'faculty_staff_user_mapping';
    protected $fillable = [
        'user_id',
        'faculty_staff_id',
    ];
}
