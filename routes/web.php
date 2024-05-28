<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::middleware(['auth'])->group(function(){
    Route::get('/book/create', [BookController::class, 'create'])->name('books.create');
    Route::get('/book/{book}', [BookController::class, 'show'])->name('books.show');
    Route::post('/book/save', [BookController::class, 'store'])->name('books.store');
});

Route::get('/book', [BookController::class, 'index'])->name('books.index');