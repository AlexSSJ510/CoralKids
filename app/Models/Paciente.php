<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'genero',
        'direccion',
        'telefono',
        'email',
        'contraseña',
        'nombre_padre_tutor',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function historialesMedicos()
    {
        return $this->hasMany(HistorialMedico::class, 'paciente_id');
    }
}
