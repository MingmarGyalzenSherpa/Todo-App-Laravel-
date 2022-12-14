<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoController::class,'index']);


Route::get('/delete-todo/{id}', [TodoController::class,'deleteTodo']);

Route::get('/edit-todo/{id}', [TodoController::class, 'editTodo']);

Route::post('/save-todo',[TodoController::class,'saveTodo'])->name('saveTodo');

Route::post('/update-todo',[TodoController::class,'updateTodo'])->name('updateTodo');