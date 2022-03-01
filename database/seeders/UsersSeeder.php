<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('adminadmin'),
            'role' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([

            'name' => 'Apoteker',
            'email' => 'apoteker@gmail.com',
            'username' => 'apoteker',
            'password' => Hash::make('apoteker'),
            'role' => 'Apoteker',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
