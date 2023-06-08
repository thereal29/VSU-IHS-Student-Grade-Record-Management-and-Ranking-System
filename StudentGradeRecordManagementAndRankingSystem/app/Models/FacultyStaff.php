<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyStaff extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'faculty_staff_personal_details';
    protected $fillable = [
        'university_number',
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'phone_number',
        'home_address',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
