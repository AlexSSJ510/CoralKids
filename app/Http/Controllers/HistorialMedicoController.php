<?php

namespace App\Http\Controllers;

use App\Models\HistorialMedico;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistorialMedicoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $paciente = $user->paciente;

        if (!$paciente) {
            return redirect()->route('home')->with('error', 'No tienes un historial médico asociado.');
        }

        $historiales = $paciente->historiales;

        return view('historial', compact('paciente', 'historiales'));
    }


}