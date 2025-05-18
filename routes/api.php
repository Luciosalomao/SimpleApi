<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']); // Rota para registro de usuário
Route::post('/login', [AuthController::class, 'login']); // Rota para login de usuário
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum'); //Rota para fazer o logout


Route::get('/books', [BookController::class, 'index'])->middleware(['auth:sanctum']); // Exemplo de GET
Route::get('/books/{id}', [BookController::class, 'show']); // Exemplo de GET com ID
Route::post('/books', [BookController::class, 'store']); // Exemplo de POST
Route::put('/books/{id}', [BookController::class, 'update']); // Exemplo de PUT
Route::delete('/books/{id}', [BookController::class, 'destroy']); // Exemplo de DELETE

