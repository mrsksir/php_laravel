<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class,'index']);
Route::get('/students/create', [StudentController::class,'create']);
Route::post('/students/save', [StudentController::class,'save']);
Route::get('/students/{id}/edit', [StudentController::class,'edit']);
Route::post('/students/{id}/update', [StudentController::class,'update']);

Route::get('/students/{id}/delete', [StudentController::class,'delete']);
Route::get('/students/{id}/show', [StudentController::class,'show']);

