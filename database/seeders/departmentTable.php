<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class departmentTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //insert data into department table
        \DB::table('department')->insert([
            ['name' => 'Human Resources','created_at' => now(), 'updated_at' => now(),'department_head' => 'John Doe', 'contact' => '123-456-7890'],
            ['name' => 'Finance','created_at' => now(), 'updated_at' => now(),'department_head' => 'Jane Smith', 'contact' => '987-654-3210'],
            ['name' => 'Information Technology','created_at' => now(), 'updated_at' => now(),'department_head' => 'Alice Johnson', 'contact' => '555-555-5555'],
            ['name' => 'Marketing','created_at' => now(), 'updated_at' => now(),'department_head' => 'Bob Brown', 'contact' => '444-444-4444'],
            ['name' => 'Sales','created_at' => now(), 'updated_at' => now(),'department_head' => 'Charlie White', 'contact' => '333-333-3333'],
            ['name' => 'Customer Service','created_at' => now(), 'updated_at' => now(),'department_head' => 'Diana Green', 'contact' => '222-222-2222'],
            ['name' => 'Research and Development','created_at' => now(), 'updated_at' => now(),'department_head' => 'Eve Black', 'contact' => '111-111-1111'],
            ['name' => 'Operations','created_at' => now(), 'updated_at' => now(),'department_head' => 'Frank Blue', 'contact' => '666-666-6666'],
            ['name' => 'Legal','created_at' => now(), 'updated_at' => now(),'department_head' => 'Grace Yellow', 'contact' => '777-777-7777'],
            ['name' => 'Administration','created_at' => now(), 'updated_at' => now(),'department_head' => 'Hank Purple', 'contact' => '888-888-8888'],    
        ]);
    }
}
