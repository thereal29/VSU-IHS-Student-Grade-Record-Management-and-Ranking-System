<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\StudentUser;
use App\Models\StudentUserMapping;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['username' => 'darylpiamonte',
            'password' => Hash::make('piamonte'),
            'email' => 'darylpiamonte@gmail.com',
            'role' => '6',
            ]
        ];
        foreach($users as $user){
            User::create($user);
        }
        $student_personal_details = StudentUser::create([
            'firstname' => 'Daryl',
            'middlename' => 'Acampado',
            'lastname' => 'Piamonte',
            'lrn_number' => '123456789123',
            'gender' => 'Male',
            'age' => '22',
            'grade_level' => 'Grade 9',
            'section' => 'Rizal',
            'birth_date' => '2000-12-29',
            'home_address' => 'Brgy. Guadalupe, Baybay City, Leyte',
            'phone_number' => '09123456789',
            'parent_name' => 'Norberta A. Piamonte'
            
        ]);
        $student_user_mapping = StudentUserMapping::create([
            'student_id' => $student_personal_details->id,
            'user_id' => '2',
        ]);
    }
}
