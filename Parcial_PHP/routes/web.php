<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\Obradeartecontroller;
use App\Http\Controllers\Exposicioncontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {

  // Artistas
  Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas.index');
  Route::post('/artistas', [ArtistaController::class, 'store'])->name('artistas.store');
  Route::get('/artistas/create', [ArtistaController::class, 'create'])->name('artistas.create');
  Route::delete('/artistas/{artista}', [ArtistaController::class, 'destroy'])->name('artistas.destroy');
  Route::put('/artistas/{artista}', [ArtistaController::class, 'update'])->name('artistas.update');
  Route::get('/artistas/{artista}/edit', [ArtistaController::class, 'edit'])->name('artistas.edit');

  // Obras
  Route::get('/obras', [ObrasdearteController::class, 'index'])->name('obras.index');
  Route::post('/obras', [ObrasdearteController::class, 'store'])->name('obras.store');
  Route::get('/obras/create', [Obradeartecontroller::class, 'create'])->name('obras.create');
  Route::delete('/obras/{obra}', [Obradeartecontroller::class, 'destroy'])->name('obras.destroy');
  Route::put('/obras/{obra}', [Obradeartecontroller::class, 'update'])->name('obras.update');
  Route::get('/obras/{obra}/edit', [Obradeartecontroller::class, 'edit'])->name('obras.edit');

  // Exposiciones
  Route::get('/exhibiciones', [ExposicionController::class, 'index'])->name('exhibiciones.index');
  Route::post('/exhibiciones', [ExposicionController::class, 'store'])->name('exhibiciones.store');
  Route::get('/exhibiciones/create', [ExposicionController::class, 'create'])->name('exhibiciones.create');
  Route::delete('/exhibiciones/{exhibicion}', [ExhibicionController::class, 'destroy'])->name('exhibiciones.destroy');
    Route::put('/exhibiciones/{exhibicion}', [ExhibicionController::class, 'update'])->name('exhibiciones.update');
    Route::get('/exhibiciones/{exhibicion}/edit', [ExhibicionController::class, 'edit'])->name('exhibiciones.edit');

});

require __DIR__.'/auth.php';
