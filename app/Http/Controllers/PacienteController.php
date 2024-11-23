<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    public function crearPaciente(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $paciente = Paciente::create([
            'user_id' => $user->id,
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'genero' => $request->input('genero'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'contraseña' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('home')->with('success', 'Paciente creado con éxito');
    }
}
    