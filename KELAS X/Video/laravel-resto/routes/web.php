<?php

use app\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/menu',function(){
//     return view('welcome');
// });

Route::get('/',[FrontController::class,'index']);