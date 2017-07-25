<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Demo Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

    }
}
