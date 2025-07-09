<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employeesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //if you want to seed the employees table, you can use the following code
        \DB::table('employees')->insert([
            ['name' => 'John Doe','position'=>'software Engineer','email' =>'john@example.com','department_id' => 1,'responsibilities' => 'Developing and maintaining software applications.'],
            ['name' => 'Alice Johnson','position'=>'Data Scientist','email' =>'alice@example.com','department_id' => 2,'responsibilities' => 'Analyzing and interpreting complex data.'],
            ['name' => 'Jane Smith','position'=>'project Manager','email' =>'jane@example.com','department_id' => 3,'responsibilities' => 'Managing projects and leading teams.'],
            ['name' => 'Mike Johnson','position'=>'UX Designer','email' =>'mike@example.com','department_id' => 4,'responsibilities' => 'Designing user-friendly interfaces.'],
            ['name' => 'Emily Davis','position'=>'Data Analyst','email' =>'emily@example.com','department_id' => 5,'responsibilities' => 'Collecting and analyzing data to inform business decisions.'],
            ['name' => 'David Wilson','position'=>'DevOps Engineer','email' =>'david@example.com','department_id' => 6,'responsibilities' => 'Implementing and managing CI/CD pipelines.'],
            ['name' => 'Sarah Brown','position'=>'QA Engineer','email' =>'sarah@example.com','department_id' => 7,'responsibilities' => 'Ensuring the quality of software products.'],
            ['name' => 'Chris Lee','position'=>'Product Owner','email' =>'chris@example.com','department_id' => 1,'responsibilities' => 'Defining product vision and roadmap.'],
            ['name' => 'Jessica Taylor','position'=>'Business Analyst','email' =>'jessica@example.com','department_id' => 2,'responsibilities' => 'Gathering and analyzing business requirements.'],
            ['name' => 'Daniel Anderson','position'=>'System Administrator','email' =>'daniel@example.com','department_id' => 3,'responsibilities' => 'Managing and maintaining IT infrastructure.'],
            ['name' => 'Laura Thomas','position'=>'Network Engineer','email' =>'laura@example.com','department_id' => 4,'responsibilities' => 'Designing and implementing network solutions.'],
            ['name' => 'Kevin Martinez','position'=>'Security Analyst','email' =>'kevin@example.com','department_id' => 5,'responsibilities' => 'Monitoring and protecting IT systems from security threats.'],
            ['name' => 'Olivia Garcia','position'=>'Technical Writer','email' =>'olivia@example.com','department_id' => 6,'responsibilities' => 'Creating and maintaining technical documentation.'],
            ['name' => 'Brian Rodriguez','position'=>'Cloud Engineer','email' =>'brian@example.com','department_id' => 7,'responsibilities' => 'Designing and managing cloud infrastructure.'],
        ]);
    }
}
