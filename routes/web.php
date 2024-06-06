<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\home::class, 'home'])->name('site.index');
Route::get('/home', [App\Http\Controllers\home::class, 'redirect'])->name('site.index.redirect');
Route::get('/about', [App\Http\Controllers\about::class, 'about'])->name('site.about');
Route::redirect('/abot', '/about');
Route::redirect('/abaut', '/about');
Route::get('/room', [App\Http\Controllers\room::class, 'room'])->name('site.room');
Route::redirect('/rom', '/room');



Route::get('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('site.register');

Route::post('/register', [App\Http\Controllers\RegisterController::class, 'saveregister'])->name('site.register'); //salvar

Route::get('/registros', [App\Http\Controllers\RegisterController::class, 'show'])->name('register.show');

Route::get('/registros/{id}/edit', [RegisterController::class, 'edit'])->name('registers.edit');


Route::put('/registros/{id}', [RegisterController::class, 'update'])->name('site.register.update'); //editar
Route::delete('/registros/{id}', [App\Http\Controllers\RegisterController::class,'destroy'])->name('site.register.destroy'); //deletar


Route::redirect('/registrer', '/register');
Route::redirect('/resgister', '/register');
Route::redirect('/registe', '/register');


Route::fallback([App\Http\Controllers\fallback::class, 'fallback']);







