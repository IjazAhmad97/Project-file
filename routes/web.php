<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\librariesController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'login'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::post('/login', [AuthController::class, 'loginstore'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('/home', [StudentController::class, 'show'])->name('student.data');
Route::get('/form', [StudentController::class, 'data'])->name('form');
Route::post('/data', [StudentController::class, 'store'])->name('data.store');
Route::get('/view/{id}', [StudentController::class, 'view'])->name('data.view');
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::put('update-data/{id}', [StudentController::class, 'update'])->name('update.data');
Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('delete.data');


Route::get('/books', [BooksController::class, 'show'])->name('book.data');
Route::get('/add-books', [BooksController::class, 'addbook'])->name('add-books');
Route::post('/add-books', [BooksController::class, 'storebook'])->name('store-books');
Route::get('/delete/{id}', [BooksController::class, 'destroy'])->name('delete.book');


Route::get('/libraries', [librariesController::class, 'show'])->name('library.data');

Route::get('/record', [RecordController::class, 'index'])->name('record.data');
Route::get('/record-store', [RecordController::class, 'store'])->name('record.store');
