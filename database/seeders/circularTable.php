<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class circularTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tbl_circular')->insert([
            ['circular_no' => 'ABC-001', 'created_at' => now(), 'updated_at' => now(), 'circular_date' => now(), 'department' => 'IT','subject'=> 'This is the circular of IT','file_path'=>'images/s.pdf'],
            ['circular_no' => 'ABC-002', 'created_at' => now(), 'updated_at' => now(), 'circular_date' => now(), 'department' => 'Digital Banking', 'subject' => 'This is the circular of DBD', 'file_path' => 'images/s1.pdf'],
            ['circular_no' => 'ABC-003', 'created_at' => now(), 'updated_at' => now(), 'circular_date' => now(), 'department' => 'Payment and settlement', 'subject' => 'This is the circular of PSD', 'file_path' => 'images/s2.pdf'],
            ['circular_no' => 'ABC-004', 'created_at' => now(), 'updated_at' => now(), 'circular_date' => now(), 'department' => 'AAA', 'subject' => 'This is the circular of AAA', 'file_path' => 'images/s3.pdf'],
            ['circular_no' => 'ABC-005', 'created_at' => now(), 'updated_at' => now(), 'circular_date' => now(), 'department' => 'BBB', 'subject' => 'This is the circular of AAA', 'file_path' => 'images/s4.pdf'],
        ]);
    }
}
