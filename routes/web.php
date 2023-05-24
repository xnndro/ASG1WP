<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', [ App\Http\Controllers\BooksController::class,'index'])->name('home');
Route::get('/detail/{id}',[ App\Http\Controllers\BooksController::class,'detail'])->name('detail');
Route::get('/category/{id}', [ App\Http\Controllers\CategoriesController::class,'details'])->name('category');
Route::get('/publisher', [ App\Http\Controllers\PublishersController::class,'index'])->name('publisher');
Route::get('/publisher-details/{id}', [ App\Http\Controllers\PublishersController::class,'details'])->name('publisher_details');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
