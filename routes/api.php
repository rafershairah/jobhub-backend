<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\JobController;

Route::post("/register",[AuthController::class,"register"]);
Route::post("/login",[AuthController::class,"login"]);
Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store']);

Route::get('/upload-form', [FormController::class,'uploadform']);
Route::post('/upload', [FormController::class,'apply']);