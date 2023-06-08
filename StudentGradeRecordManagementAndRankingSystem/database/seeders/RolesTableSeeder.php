<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'description' => 'Administrator',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Honors and Awards Committee',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Guidance Facilitator',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Adviser',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Subject Teacher',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Non-graduating Junior High School',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Graduating Junior High School student and qualified for honors',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Non-graduating Senior High School student or non-qualified student for honors',
        ]);
        DB::table('user_roles')->insert([
            'description' => 'Graduating Senior High School student and qualified for honors',
        ]);
    }
}
