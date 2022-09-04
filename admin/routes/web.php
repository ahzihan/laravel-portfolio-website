<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;



Route::get('/', [HomeController::class,'HomeIndex']);

Route::get('/visitor', [VisitorController::class,'VisitorIndex']);

Route::get('/services', [ServicesController::class,'ServicesIndex']);
Route::get('/getServices', [ServicesController::class,'getServices']);
Route::post('/deleteService', [ServicesController::class,'deleteService']);
Route::post('/getServiceById', [ServicesController::class,'getServiceById']);
Route::post('/serviceUpdate', [ServicesController::class,'ServiceUpdate']);

Route::get('/courses', [CourseController::class,'index']);
Route::get('/create', [CourseController::class,'create']);
Route::post('/store', [CourseController::class,'store']);
Route::get('/edit/{id}', [CourseController::class,'edit']);
Route::post('/update', [CourseController::class,'update']);
Route::get('/destroy/{id}', [CourseController::class,'destroy']);

//Rest full 

Route::resource('project', ProjectController::class);
