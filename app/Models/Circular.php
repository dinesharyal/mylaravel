<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    use HasFactory;
    protected $table = 'tbl_circular'; // Specify the table name if it differs from the model name
    protected $fillable = ['circular_no', 'department', 'subject']; // Define fillable attributes
}
