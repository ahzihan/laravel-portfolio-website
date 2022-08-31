<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServicesController;



Route::get('/', [HomeController::class,'HomeIndex']);

Route::get('/visitor', [VisitorController::class,'VisitorIndex']);

Route::get('/services', [ServicesController::class,'ServicesIndex']);
Route::get('/getServices', [ServicesController::class,'getServices']);
Route::post('/deleteService', [ServicesController::class,'deleteService']);
Route::post('/getServiceById', [ServicesController::class,'getServiceById']);
Route::post('/serviceUpdate', [ServicesController::class,'ServiceUpdate']);
