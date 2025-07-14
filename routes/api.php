<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperHeroController;

Route::post('/create-superhero', [SuperHeroController::class, 'store']);
Route::get('/showall-superhero', [SuperHeroController::class, 'showAll']);
Route::get('/superhero/{id}', [SuperHeroController::class, 'showById']);
Route::put('/update-superhero/{id}', [SuperHeroController::class, 'update']);
Route::delete('/delete-superhero/{id}', [SuperHeroController::class, 'delete']);
