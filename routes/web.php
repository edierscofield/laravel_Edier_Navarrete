<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoInformaticaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'saludito']);
Route::resource('/cursos', CursoController::class);

// Rutas para los cursos de informática
Route::get('/cursoinformatica', [CursoInformaticaController::class, 'index'])->name('cursoinformatica.index');
Route::get('/cursoinformatica/create', [CursoInformaticaController::class, 'create'])->name('cursoinformatica.create');
Route::post('/cursoinformatica', [CursoInformaticaController::class, 'store'])->name('cursoinformatica.store');
Route::get('/cursoinformatica/{curso}/edit', [CursoInformaticaController::class, 'edit'])->name('cursoinformatica.edit');
Route::put('/cursoinformatica/{curso}', [CursoInformaticaController::class, 'update'])->name('cursoinformatica.update');
Route::delete('/cursoinformatica/{curso}', [CursoInformaticaController::class, 'destroy'])->name('cursoinformatica.destroy');
Route::get('/cursoinformatica/{curso}', [CursoInformaticaController::class, 'show'])->name('cursoinformatica.show');
