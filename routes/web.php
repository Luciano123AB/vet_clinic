<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Clients:
Route::get('/client', [ClientController::class, 'index']);
Route::get('/client/new', [ClientController::class, 'create']);
Route::post('/client', [ClientController::class, 'store']);
Route::get('/client/edit/{id}', [ClientController::class, 'edit']);
Route::post('/client/{id}', [ClientController::class, 'update']);
Route::get('/client/delete/{id}', [ClientController::class, 'destroy']);