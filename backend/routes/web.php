<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Laravel is alive';
});


/* Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
}); */

require __DIR__.'/settings.php';
