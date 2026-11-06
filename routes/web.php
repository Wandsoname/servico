
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;

// Página inicial
Route::get('/', function () {
    return view('home');
});

// Login
Route::view('/login', 'auth.login')->name('login');

// Rotas dos serviços
Route::resource('servicos', ServicoController::class);
