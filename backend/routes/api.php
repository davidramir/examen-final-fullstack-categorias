<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

//rutear la api para categorias
Route::apiResource('categorias', CategoriaController::class);