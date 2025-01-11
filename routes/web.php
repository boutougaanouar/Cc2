<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\LaboratoireController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('parfums', ParfumController::class);
Route::get('parfums/{parfum}/details-produits', [ParfumController::class, 'detailsProduits'])->name('parfums.details-produits');

Route::resource('laboratoires', LaboratoireController::class);

