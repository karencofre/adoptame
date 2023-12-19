<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;



    public function relacion_mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
}
