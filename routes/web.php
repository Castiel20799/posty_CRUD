<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'index']);



/*Route::get('/posts/create',[PostController::class,'create']);
Route::post('/posts',[PostController::class,'store']);

Route::get('/posts/{id}/edit',[PostController::class,'edit']);
Route::put('/posts/{id}',[PostController::class,'update']);

Route::get('/posts/{id}',[PostController::class,'show']);

Route::delete('/posts/{id}',[PostController::class,'destroy']);*/

Route::resource('posts', PostController::class);



Route::get('register',[RegisterController::class,'create']);
Route::post('register',[RegisterController::class,'store']);
Route::get('login',[LoginController::class,'create']);

Route::get('login',[LoginController::class,'create']);
Route::post('login',[LoginController::class,'store']);

 Route::delete('logout',[LogoutController::class,'destroy']);









