<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\BirdForm;
use App\Livewire\ChatBot;
use App\Livewire\Counter;
use App\Livewire\Lazy;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/bird', BirdForm::class)->name('bird');
    Route::get('/counter', Counter::class)->name('counter');
    Route::get('/lazy', Lazy::class)->lazy()->name('lazy');
    Route::get('/chat', ChatBot::class)->name('chat');
});

require __DIR__ . '/auth.php';
