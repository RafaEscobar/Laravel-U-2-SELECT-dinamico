<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','cp', 'estados_id'];

    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estados_id');
    }
}

