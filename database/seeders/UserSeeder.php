<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'User One',
                'email' => 'userone@example.com',
                'password' => Hash::make('passwordAdmin'),  // Use Hash::make to encrypt passwords
                'status' => 0,
                'email_verified_at' => now(),
            ],
            [
                'name' => 'User Two',
                'email' => 'usertwo@example.com',
                'password' => Hash::make('passwordUser'),
                'status' => 1,
                'email_verified_at' => now(),
            ],
        ]);
    }
}
