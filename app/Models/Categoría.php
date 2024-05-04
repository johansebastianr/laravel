<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoría extends Model
{
    public function posts(){
        return $this->hasOne('App\Models\Post');
    }
    use HasFactory;
}
