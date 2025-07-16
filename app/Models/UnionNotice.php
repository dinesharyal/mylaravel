<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Union;

class UnionNotice extends Model
{
    use HasFactory;
    protected $table='unions_notice';
    public function union()
    {
        return $this->belongsTo(Union::class, 'union_id', 'id');
    }
}
