<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::post('/todos', [ToDoController::class, 'store']);


Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/diary/create', [DiaryController::class, 'create']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
Route::post('/diary', [DiaryController::class, 'store']);
