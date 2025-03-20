<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 
// Route::get('/Welcome',[WelcomerController::class,'index']);

Route::get('Welcome/{id}',[WelcomerController::class,'check']);
// Route::post('Users',[UsersController::class,'pepole']);
// Route::get('Users',[UsersController::class,'index']);
// Route::put('Users/{id}',[UsersController::class,'update']);
// Route::get('Users/{id}',[UsersController::class,'show']);
// Route::delete('Users/{id}',[UsersController::class,'del']);
