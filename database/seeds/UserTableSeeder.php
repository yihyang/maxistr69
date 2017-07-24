<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Demo Admin',
            'email' => 'admin@gmail.com',
            'role' => 'ADMIN',
            'password' => bcrypt('admin'),
        ]);

        DB::table('tertiobroadbands')->insert([
            'username' => 'user1',
            'password' => 'user123',
            'serviceName' => 'Maxis One',
            'status' => 1,
            'serialNo' => 'AAABIC',
            'voipNo' => '1234ABC',
            'templateId' => 1,
            'vlaninternet' => 60,
            'vlanmgt' => 30,
            'vlanvoip' => 2,
            'vlaniptv' => 10
        ]);
    }
}
