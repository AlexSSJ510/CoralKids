<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function historialesMedicos()
    {
        return $this->hasMany(HistorialMedico::class, 'paciente_id');
    }
}