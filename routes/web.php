<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'index']);

Route::get('/posts/show/{id}',[PostController::class,'show']);

Route::get('/posts/create',[PostController::class,'create']);
Route::post('/posts/store',[PostController::class,'store']);

Route::get('/posts/edit/{id}',[PostController::class,'edit']);
Route::get('/posts/update/{id}',[PostController::class,'update']);

Route::get('/posts/delete/{id}',[PostController::class,'destroy']);




