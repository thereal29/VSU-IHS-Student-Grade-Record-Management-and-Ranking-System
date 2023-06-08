<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUser extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'student_personal_details';
    protected $fillable = [
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'lrn_number',
        'gender',
        'age',
        'grade_level',
        'section',
        'birth_date',
        'home_address',
        'phone_number',
        'parent_name',
    ];
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
