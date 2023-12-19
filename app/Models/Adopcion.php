<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{
    use HasFactory;

        public function relacion_user()
    {
        return $this->belongsTo(User::class);
    }
            public function relacion_mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
}
