<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\department;

class employees extends Model
{
    use HasFactory;

    protected $table = 'employees'; // Specify the table name if it differs from the model name
    protected $fillable = ['name', 'email', 'phone', 'department_id']; // Define fillable attributes
       
}
