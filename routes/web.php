<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrocontroller;
use App\Http\Controllers\sesioncontroller;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/registro', [registrocontroller::class, 'create'])
->middleware('guest')
->name('registro.index');
Route::post('/registro', [registrocontroller::class, 'store'])
->name('registro.store');
Route::get('/login', [sesioncontroller::class, 'create'])
->middleware('guest')
->name('login.index');
Route::post('/login', [sesioncontroller::class, 'store'])
->name('login.store');
Route::get('/logout', [sesioncontroller::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

