<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::resource('/',PostController::class);

Route::put('/edit/{id}',[PostController::class,'update']);
Route::delete('/delete/{id}',[PostController::class,'destroy']);
