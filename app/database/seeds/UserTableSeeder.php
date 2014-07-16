<?php

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        $users = [
            ['username' => 'test', 'password' => Hash::make('test'), 'email' => 'test@test.com'],
            ['username' => 'guest', 'password' => Hash::make('guest'), 'email' => 'guest@guest.com'],
            ['username' => 'admin', 'password' => Hash::make('admin'), 'email' => 'admin@admin.com']
        ];
 
        DB::table('users')->insert($users);
    }
 
}
