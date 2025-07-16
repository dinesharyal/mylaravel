<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    use HasFactory;
    protected $table = 'political_unions';
    protected $fillable = ['name','description'];

    public function notice()
    {
        return $this->hasMany(UnionNotice::class, 'union_id');
    }
}
