<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomerController;


// Route::get('Welcome/{id}',[WelcomerController::class,'check']);
// Route::post('Users',[UsersController::class,'pepole']);
// Route::get('/Users',[UserController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [UserController::class, 'index'])->name('index_user');
Route::post('/user', [UserController::class, 'pepole'])->name('user');

