<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DailyPaymentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MonthlyPaymentController;
use App\Http\Controllers\RegisterPlayerController;
use App\Http\Controllers\WeeklyPaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class)->name('home');

Route::get('/about', AboutController::class)->name('about');
Route::get('/programs', ProgramController::class)->name('programs');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/gallery', GalleryController::class)->name('gallery');
Route::get('/register-player', [RegisterPlayerController::class, 'index'])->name('register-player.index');
Route::post('/player', [RegisterPlayerController::class, 'register'])->name('trainee.register');
Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/daily-checkout', [DailyPaymentController::class, 'index'])->name('daily-checkout');
Route::post('/pay', [DailyPaymentController::class, 'intialize'])->name('pay');
Route::get('/crusaders/success', [DailyPaymentController::class, 'callback'])->name('callback');

Route::get('/weekly-checkout', [WeeklyPaymentController::class, 'index'])->name('weekly-checkout');
Route::post('/weekly-pay', [WeeklyPaymentController::class, 'intialize'])->name('weekly-pay');
Route::get('/crusaders/success', [WeeklyPaymentController::class, 'callback'])->name('callback');

Route::get('/monthly-checkout', [MonthlyPaymentController::class, 'index'])->name('monthly-checkout');
Route::post('/monthly-pay', [MonthlyPaymentController::class, 'intialize'])->name('monthly-pay');
Route::get('/crusaders/success', [MonthlyPaymentController::class, 'callback'])->name('callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
