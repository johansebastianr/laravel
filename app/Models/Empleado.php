<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function coche(){
        return $this->hasOne('App\Models\Coche');

    }
    use HasFactory;
}
