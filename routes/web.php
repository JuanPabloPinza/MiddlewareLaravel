<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portal\BebeController;
use App\Http\Controllers\Portal\NinoController;
use App\Http\Controllers\Portal\AdolescenteController;
use App\Http\Controllers\Portal\JovenAdultoController;
use App\Http\Controllers\Portal\AdultoController;
use App\Http\Controllers\Portal\AdultoMayorController;
use App\Http\Controllers\Portal\PersonaLongevaController;
use App\Http\Controllers\Portal\ErrorController;

Route::get('/', function () {
    return view('welcome');
})->name('portal.inicio');

Route::post('/verificar-edad', function () {
})->middleware('age.classifier')->name('portal.verificarEdad');


Route::get('/bebes', BebeController::class)->name('portal.bebes');
Route::get('/ninos', NinoController::class)->name('portal.ninos');
Route::get('/adolescentes', AdolescenteController::class)->name('portal.adolescentes');
Route::get('/jovenes', JovenAdultoController::class)->name('portal.jovenes');
Route::get('/adultos', AdultoController::class)->name('portal.adultos');
Route::get('/mayores', AdultoMayorController::class)->name('portal.mayores');
Route::get('/longevos', PersonaLongevaController::class)->name('portal.longevos');

Route::get('/error-edad', ErrorController::class)->name('portal.error.edadInvalida');