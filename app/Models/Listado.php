<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    use HasFactory;

        public function relacion_adopcion()
    {
        return $this->belongsTo(Adopcion::class);
    }
    public function relacion_mascota(){
        return $this->belongsTo(Mascota::class);
    }
}
