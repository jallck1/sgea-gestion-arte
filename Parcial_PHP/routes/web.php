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
Route::resource('obras', Obradeartecontroller::class);

//exposiciones
Route::resource('exposiciones', Exposicioncontroller::class);



});

require __DIR__.'/auth.php';
