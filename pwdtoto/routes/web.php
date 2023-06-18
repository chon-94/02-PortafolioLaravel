<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('index');
Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('create');
Route::get('/servicios/show', [ServiciosController::class, 'show'])->name('show');
Route::get('/servicios/p', [ServiciosController::class, 'p'])->name('p');

Route::get('/contacto', [ContactoController::class, 'contacto'])->name('contacto');
Route::get('/acercade', [AcercaDeController::class, 'acercade'])->name('acercade');

Auth::routes();

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::post('/login', [UserController::class, 'login'])->name('login');
