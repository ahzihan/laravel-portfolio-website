<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;



Route::get('/', [HomeController::class,'HomeIndex']);


// Route::get('/', [CourseController::class,'index']);
// Route::get('/create', [CourseController::class,'create']);
// Route::post('/store', [CourseController::class,'store']);
// Route::get('/edit/{id}', [CourseController::class,'edit']);
// Route::post('/update/{id}', [CourseController::class,'update']);
// Route::get('/destroy', [CourseController::class,'destroy']);

