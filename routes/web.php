<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books',[BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}',[BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}',[BookController::class, 'update'])->name('books.update');
Route::post('/books',[BookController::class, 'store'])->name('books.store');
Route::delete('/books/{id}',[BookController::class, 'destroy'])->name('books.destroy');