<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
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

//  artistas
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');
Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');
Route::delete('/artists/{artist}', [ArtistController::class, 'destroy'])->name('artists.destroy');
Route::put('/artists/{artist}', [ArtistController::class, 'update'])->name('artists.update');
Route::get('/artists/{artist}/edit', [ArtistController::class, 'edit'])->name('artists.edit');


// obras de arte
Route::get('/obras', [Obradeartecontroller::class, 'index'])->name('obras.index');
Route::post('/obras', [Obradeartecontroller::class, 'store'])->name('obras.store');
Route::get('/obras/create', [Obradeartecontroller::class, 'create'])->name('obras.create');
Route::get('/obras/{obra}', [Obradeartecontroller::class, 'show'])->name('obras.show');
Route::get('/obras/{obra}/edit', [Obradeartecontroller::class, 'edit'])->name('obras.edit');
Route::put('/obras/{obra}', [Obradeartecontroller::class, 'update'])->name('obras.update');
Route::delete('/obras/{obra}', [Obradeartecontroller::class, 'destroy'])->name('obras.destroy');


// Exposiciones
Route::get('/exposiciones', [Exposicioncontroller::class, 'index'])->name('exposiciones.index');
Route::post('/exposiciones', [Exposicioncontroller::class, 'store'])->name('exposiciones.store');
Route::get('/exposiciones/create', [Exposicioncontroller::class, 'create'])->name('exposiciones.create');
Route::get('/exposiciones/{exposicion}', [Exposicioncontroller::class, 'show'])->name('exposiciones.show');
Route::get('/exposiciones/{exposicion}/edit', [Exposicioncontroller::class, 'edit'])->name('exposiciones.edit');
Route::put('/exposiciones/{exposicion}', [Exposicioncontroller::class, 'update'])->name('exposiciones.update');
Route::delete('/exposiciones/{exposicion}', [Exposicioncontroller::class, 'destroy'])->name('exposiciones.destroy');



});

require __DIR__.'/auth.php';
