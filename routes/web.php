<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todos', [TodoController::class, 'index'])->name('todosList');
Route::get('/todos/create', [TodoController::class, 'create'])->name('createTodo');
Route::post('/todos/store', [TodoController::class, 'store'])->name('storeTodo');
Route::get('/todos/{todo}/show', [TodoController::class, 'show'])->name('showTodo');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('editTodo');
Route::put('/todos/{todo}/update', [TodoController::class, 'update'])->name('updateTodo');
Route::delete('/todos/{todo}/destroy', [TodoController::class, 'destroy'])->name('destroyTodo');

Route::get('/getAllLatestTodos', [TodoController::class, 'getAllLatestTodos'])->name('getAllLatestTodos');
