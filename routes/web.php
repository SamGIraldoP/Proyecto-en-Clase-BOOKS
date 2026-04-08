<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorBookController;

Route::get('/books',[BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}',[BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}',[BookController::class, 'update'])->name('books.update');
Route::post('/books',[BookController::class, 'store'])->name('books.store');
Route::delete('/books/{id}',[BookController::class, 'destroy'])->name('books.destroy');

Route::get('/authors',[AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{id}',[AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}',[AuthorController::class, 'update'])->name('authors.update');
Route::post('/authors',[AuthorController::class, 'store'])->name('authors.store');
Route::delete('/authors/{id}',[AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('/author_books',[AuthorBookController::class, 'index'])->name('author_books.index');
Route::get('/author_books/{id}',[AuthorBookController::class, 'edit'])->name('author_books.edit');
Route::put('/author_books/{id}',[AuthorBookController::class, 'update'])->name('author_books.update');
Route::post('/author_books',[AuthorBookController::class, 'store'])->name('author_books.store');
Route::delete('/author_books/{id}',[AuthorBookController::class, 'destroy'])->name('author_books.destroy');