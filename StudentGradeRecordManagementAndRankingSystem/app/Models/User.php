<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Roles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function role(): Attribute
    {  // $roles = Roles::select('description')->get();
        $roles = DB::table('user_roles')->pluck('description');
      //  dd($roles->all());
        return new Attribute(
            get:fn($value) => ['', $roles[0], $roles[1], $roles[2], $roles[3], $roles[4], $roles[5], $roles[6], $roles[7]][$value],
        );
    }
    public function getAdmin(){
        return $this->hasOne(FacultyStaff::class);
    }
    // public function getStudent(){
    //     return $this->hasOne(StudentUser::class);
    // }
}
