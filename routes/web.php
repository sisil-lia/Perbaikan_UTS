<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class,'dashboard']);

Route::get('/tasks',[TaskController::class,'index']);
Route::get('/tasks/create',[TaskController::class,'create']);
Route::post('/tasks',[TaskController::class,'store']);

Route::get('/tasks/{task}/edit',[TaskController::class,'edit']);
Route::put('/tasks/{task}',[TaskController::class,'update']);

Route::delete('/tasks/{task}',[TaskController::class,'destroy']);

Route::post('/tasks/{task}/complete',
    [TaskController::class,'complete']);

Route::get('/report',
    [TaskController::class,'report']);