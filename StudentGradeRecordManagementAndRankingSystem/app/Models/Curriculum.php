<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $table = 'subject';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'subject_name',
    ];
}
