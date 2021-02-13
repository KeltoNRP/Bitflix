<?php

use App\Http\Controllers\{
    MovieController
};
use Illuminate\Support\Facades\Route;

Route::any('/filmes/filtrar', [MovieController::class, 'search'])->name('movies.search');
Route::get('/filmes/adicionar', [MovieController::class, 'create'])->name('movies.create');
Route::put('/filmes/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::get('/filmes/editar/{id}', [MovieController::class, 'edit'])->name('movies.edit');
Route::delete('/filmes/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');
Route::get('/filmes/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::post('/filmes', [MovieController::class, 'store'])->name('movies.store');
Route::get('/', [MovieController::class, 'index'])->name('movies.index');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function (){
    return view('welcome');
});
*/

require __DIR__.'/auth.php';
