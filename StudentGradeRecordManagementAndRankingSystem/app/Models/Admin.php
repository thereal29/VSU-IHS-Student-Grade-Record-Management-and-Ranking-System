<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'adviser_admin_details';
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
