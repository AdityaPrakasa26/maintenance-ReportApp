<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeRequestController;
use App\Http\Controllers\TaskListController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// Rute untuk halaman Change Request Form
Route::get('/change-request', function () {
    return view('change-request');
});

// Rute untuk halaman Task Description
Route::get('/task-description', function () {
    return view('task-description');
});

// Rute untuk halaman Task List
Route::get('/task-list', [TaskListController::class, 'index']);

// Rute untuk menangani pengiriman Change Request Form
Route::post('/submit-change-request', [ChangeRequestController::class, 'store']);

// Rute untuk menangani pengiriman Task List Form
Route::post('/submit-task-list', [TaskListController::class, 'store']);
