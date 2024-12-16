<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/authors', [AuthorController:: class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorController:: class, 'store'])->name('authors.store');
<<<<<<< HEAD
Route::put('/authors/{id}', [AuthorController:: class, 'update'])->name('authors.update');
Route::get('/authors/{id}', [AuthorController:: class, 'edit'])->name('authors.edit');
Route::delete('/authors/{id}', [AuthorController:: class, 'destroy'])->name('authors.destroy');

Route::get('/books', [BookController:: class, 'index'])->name('books.index');
Route::post('/books', [BookController:: class, 'store'])->name('books.store');
Route::put('/books/{id}', [BookController:: class, 'update'])->name('books.update');
Route::get('/books/{id}', [BookController:: class, 'edit'])->name('books.edit');
Route::delete('/books/{id}', [BookController:: class, 'destroy'])->name('books.destroy');
=======

Route::delete('/authors/{id}', [AuthorController:: class, 'destroy'])->name('authors.destroy');

Route::get('/authors/{id}', [AuthorController:: class, 'edit'])->name('authors.edit');

Route::put('/authors/{id}', [AuthorController:: class, 'update'])->name('authors.update');
>>>>>>> 3a0db4be4f981595f4a54b9346b6cdb32e54a972
