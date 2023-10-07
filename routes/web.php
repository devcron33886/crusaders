<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegisterPlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/about', AboutController::class)->name('about');
Route::get('/programs', ProgramController::class)->name('programs');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/gallery', GalleryController::class)->name('gallery');
Route::get('/register-player', [RegisterPlayerController::class, 'index'])->name('register-player.index');
Route::post('/register-player', [RegisterPlayerController::class, 'store'])->name('register-player.store');

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

require __DIR__.'/auth.php';
