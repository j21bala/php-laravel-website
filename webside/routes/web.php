<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // Importa el controlador

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/proyecto', [PageController::class, 'proyecto'])->name('proyecto');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');