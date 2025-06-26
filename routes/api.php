<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;


Route::post('/addMaterial', [MaterialController::class, 'addMaterial']);
Route::post('/addCategoria', [CategoriaController::class, 'addCategoria']);
Route::put('/updateMaterial/{id}', [MaterialController::class, 'updateMaterial']);
Route::get('/getMaterialsWithCategories', [MaterialController::class, 'getMaterialsWithCategories']);