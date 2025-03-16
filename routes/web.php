<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('modal1', function () {
    return Inertia::modal('Modal1')
        ->baseRoute('dashboard');
});

Route::get('modal2', function () {
    return Inertia::modal('Modal2')
        ->baseRoute('dashboard');
});

Route::get('modal3', function () {
    return Inertia::modal('Modal3')
        ->baseRoute('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
