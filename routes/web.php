<?php

use App\Http\Controllers\{
    MovieController
};

Route::get('/filmes', [MovieController::class, 'index']);

Route::get('/', function (){
    return view('welcome');
});
