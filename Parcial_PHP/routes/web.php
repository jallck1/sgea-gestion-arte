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

    //  artistas
Route::resource('artistas', ArtistaController::class);

// obras de arte
Route::resource('obras', Obradeartecontroller::class);

//exposiciones
Route::resource('exposiciones', Exposicioncontroller::class);


});

require __DIR__.'/auth.php';
