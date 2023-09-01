<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/registerView', fn() => view('register'));
Route::get('/loginView', fn() => view('login'));
Route::get('/panel', [TaskController::class,'index']);

Route::post('/register',[UserController::class, 'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/add/',[TaskController::class, 'add']);