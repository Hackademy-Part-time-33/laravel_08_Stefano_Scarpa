<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::middleware(['auth'])->group(function(){
    Route::get('/book/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/book/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/book/{book}/show', [BookController::class, 'show'])->name('books.show');
    Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/book/{book}/update', [BookController::class, 'update'])->name('books.update');
    Route::delete('/book/{book}/delete', [BookController::class, 'destroy'])->name('books.destroy');
});

Route::get('/book', [BookController::class, 'index'])->name('books.index');