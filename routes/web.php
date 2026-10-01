<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroSuellenController;

Route::get('/livros', [LivroController::class, 'index']);
Route::get('/livros/{isbn}', [LivroController::class, 'show']);
Route::get('/livros-suellen', [LivroSuellenController::class, 'index']);
Route::get('/livros-suellen/{isbn}', [LivroSuellenController::class, 'show']);