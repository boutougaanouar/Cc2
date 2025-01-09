<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ParfumController;

Route::resource('parfum', ParfumController::class);
Route::get('parfum/{id}/detailsProduit', [ParfumController::class, 'detailsProduit'])->name('parfum.detailsProduit');

use App\Http\Controllers\LaboratoireController;

Route::get('/laboratoires', [LaboratoireController::class, 'index'])->name('laboratoire.index');

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
