<?php

declare(strict_types=1);

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function() {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function() {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::resource('chat', ChatController::class)->only(['create', 'store', 'edit']);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
