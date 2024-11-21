<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservarController;
use App\Http\Controllers\HistorialMedicoController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'Inicio')->name('home');

Route::view('Historial','Historial')->name('historial')->middleware('auth');
Route::get('Historial', [HistorialMedicoController::class, 'index'])->name('historial')->middleware('auth');
Route::get('/Historial/{pacientes}', [HistorialMedicoController::class, 'show'])->name('historial.show');


Route::get('reservar', [ReservarController::class, 'index'])->name('reservar.index');
Route::get('reservar', [ReservarController::class, 'Formulario'])->name('reservar');
Route::post('reservar', [ReservarController::class, 'store'])->name('posts.store');


Route::get('/dashboard', function () {
    return view('Inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';