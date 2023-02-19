<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function municipio()
    {
        return $this->hasMany('App\Models\Municipio', 'estados_id', 'id');
    }
}
