<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function (){ //rota para abrir no navegador
    return view('Inicio');
});

Route::get('/departamentos', function (){ //rota para abrir no navegador
    return view('departamentos');
});

Route::get('/instituicao', function (){ //rota para abrir no navegador
    return view('instituicao');
});

Route::get('/vestibulinho', function (){ //rota para abrir no navegador
    return view('vestibulinho');
});

Route::get('/sobrenos', function (){ //rota para abrir no navegador
    return view('sobrenos');
});

Route::get('/oportunidade', function (){ //rota para abrir no navegador
    return view('oportunidade');
});

require __DIR__.'/auth.php';