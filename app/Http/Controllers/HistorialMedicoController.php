<?php

namespace App\Http\Controllers;

use App\Models\HistorialMedico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistorialMedicoController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all(); // Obtiene todos los pacientes
        $historiales = HistorialMedico::all(); // Obtiene todos los historiales de la tabla 'historiales_medicos'

        return view('Historial', compact('pacientes', 'historiales'));
    }

    public function show($id)
    {
        $paciente = Auth::user()->paciente;

        $paciente = Paciente::findOrFail($id);  // Obtén el paciente por su ID
        $historiales = HistorialMedico::where('paciente_id', $id)->get(); // Filtra el historial por paciente
        
        if (!$paciente) {
            return redirect()->route('home')->with('error', 'No se encontró historial médico asociado a este usuario.');
        }
        $historiales = $paciente->historiales;

        return view('historial.show', compact('paciente', 'historiales'));
    }
}