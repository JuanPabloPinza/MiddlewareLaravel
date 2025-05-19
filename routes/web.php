<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdolescentesController;
use App\Http\Controllers\AdultosController;
use App\Http\Controllers\BebesController;
use App\Http\Controllers\EdadController;
use App\Http\Controllers\JovenesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LongevosController;
use App\Http\Controllers\MayoresController;
use App\Http\Controllers\NinosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/user', [UserController::class, 'index'])->name('user');

Route::post('/edad', [EdadController::class, 'store'])->name('edad.store');

Route::get('/bebes', [BebesController::class, 'index']);
Route::get('/ninos', [NinosController::class, 'index']);
Route::get('/adolescentes', [AdolescentesController::class, 'index']);
Route::get('/jovenes', [JovenesController::class, 'index']);
Route::get('/adultos', [AdultosController::class, 'index']);
Route::get('/mayores', [MayoresController::class, 'index']);
Route::get('/longevos', [LongevosController::class, 'index']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
});

Route::get('/redirigir/{edad}', function ($edad) {
    if ($edad >= 0 && $edad <= 5) return redirect('/bebes');
    if ($edad >= 6 && $edad <= 12) return redirect('/ninos');
    if ($edad >= 13 && $edad <= 17) return redirect('/adolescentes');
    if ($edad >= 18 && $edad <= 25) return redirect('/jovenes');
    if ($edad >= 26 && $edad <= 59) return redirect('/adultos');
    if ($edad >= 60 && $edad <= 74) return redirect('/mayores');
    if ($edad >= 75 && $edad <= 120) return redirect('/longevos');

    abort(404);
})->name('redirigir.edad');

Route::get('/dummy/{edad}', function () {
    return "Redireccionando...";
})->middleware('edad.redirect')->name('dummy');