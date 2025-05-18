<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/books', [BookController::class, 'index']); // Exemplo de GET
Route::get('/books/{id}', [BookController::class, 'show']); // Exemplo de GET com ID
Route::post('/books', [BookController::class, 'store']); // Exemplo de POST
Route::put('/books/{id}', [BookController::class, 'update']); // Exemplo de PUT
Route::delete('/books/{id}', [BookController::class, 'destroy']); // Exemplo de DELETE
