<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class studentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
            'age' => 20,
            ],
            [
            'name' => 'Bob Smith',
            'email' => 'bob@example.com',
            'age' => 22,
            ],
            [
            'name' => 'Charlie Brown',
            'email' => 'charlie@example.com',
            'age' => 21,
            ],
        ]);
    }
}
