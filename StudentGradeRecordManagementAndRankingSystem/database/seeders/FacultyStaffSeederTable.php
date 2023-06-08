<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultyStaffSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['username' => 'nelsontejara',
            'password' => Hash::make('vsuihshrrs'),
            'email' => 'nelsontejara@gmail.com',
            'role' => '1',
            ]
        ];
        foreach($users as $user){
            User::create($user);
        }
        $faculty_staff_details = [
            ['university_number' => '123786128934',
            'user_id' => '1',
            'firstname' => 'Nelson',
            'middlename' => 'Tejara',
            'lastname' => 'Tejara',
            'phone_number' => '09123456789',
            'home_address' => 'Baybay City, Leyte', 
            ]
        ];
        foreach($faculty_staff_details as $user){
            FacultyStaff::create($user);
        }
    }
}
