<?php

use App\Http\Controllers\{
    MovieController
};
use Illuminate\Support\Facades\Route;

Route::get('/filmes/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::post('/filmes', [MovieController::class, 'store'])->name('movies.store');
Route::get('/filmes', [MovieController::class, 'index'])->name('movies.index');
Route::get('/filmes/novo', [MovieController::class, 'create'])->name('movies.create');

Route::get('/', function (){
    return view('welcome');
});
