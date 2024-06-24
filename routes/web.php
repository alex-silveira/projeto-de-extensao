<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DesempregoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EmpregoController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/* Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/desemprego/criar', function () {
    return Inertia::render('Desemprego/Criar');
})->middleware(['auth', 'verified'])->name('desemprego.criar');



Route::get('/curso/criar', function () {
    return Inertia::render('Curso/Criar');
})->middleware(['auth', 'verified'])->name('curso.criar');


Route::get('/emprego/criar', function () {
    return Inertia::render('Emprego/Criar');
})->middleware(['auth', 'verified'])->name('emprego.criar');

Route::get('/emprego/listar', function () {
    return Inertia::render('Emprego/Listar');
})->middleware(['auth', 'verified'])->name('emprego.listar');



Route::middleware('auth')->group(function () {
    Route::post('/desemprego/criar',  [DesempregoController::class, 'store'])->name('desemprego.store');
    Route::post('/emprego/criar',  [EmpregoController::class, 'store'])->name('emprego.store');
    Route::get('/curso/listar',  [CursoController::class, 'index'])->name('curso.index');
    Route::post('/curso/criar',  [CursoController::class, 'store'])->name('curso.store');

    Route::get('/dashboard',  [DashBoardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
