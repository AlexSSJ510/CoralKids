<?php

namespace App\Http\Controllers;

use App\Models\Reservar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index ()
    {
        $posts = Reservar::get();

        return view('reservar', ['reservar' => $posts]);
    }
    public function Formulario()
    {
        return view('reservar');   
    }
    public function store(Request $request)
    {
        $post = new Reservar;
        $post->nombre = $request->input('nombre');
        $post->email = $request->input('email');
        $post->telefono = $request->input('telefono');
        $post->fecha = $request->input('fecha');
        $post->especialidad = $request->input('especialidad');
        $post->mensaje = $request->input('mensaje');
        $post->save();

        session()->flash('status','Formulario Enviado'); 
        return to_route('reservar');
    }
}