<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/books', [BookController::class, 'index'])->name('books.list');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::post('/books/{book}/update', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}/delete', [BookController::class, 'confirmDelete'])->name('books.confirmDelete');
Route::post('/books/{book}/delete', [BookController::class, 'destroy'])->name('books.destroy');
