<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class insertIntoUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
            'name' => 'Alice Smith',
            'email' => 'alice@example.com',
            'password' => bcrypt('password1'),
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Bob Johnson',
            'email' => 'bob@example.com',
            'password' => bcrypt('password2'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Charlie Brown',
            'email' => 'charlie@example.com',
            'password' => bcrypt('password3'),
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Diana Prince',
            'email' => 'diana@example.com',
            'password' => bcrypt('password4'),
            'role' => 'editor',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Ethan Hunt',
            'email' => 'ethan@example.com',
            'password' => bcrypt('password5'),
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
