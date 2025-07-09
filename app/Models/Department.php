<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $table = 'department'; // Specify the table name if it differs from the model name
    protected $fillable = ['name', 'department_head', 'contact']; // Define fillable attributes
}