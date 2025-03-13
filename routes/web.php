<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController; 
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('notes', NoteController::class);  

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');