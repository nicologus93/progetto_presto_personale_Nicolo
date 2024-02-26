<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class,'welcome'])->name('welcome');

// Rotte articoli

Route::get('/article/index',[ArticleController::class,'index'])->name('article_index');
Route::get('/article/create',[ArticleController::class,'create'])->name('article_create');
Route::POST('/article/store',[ArticleController::class,'store'])->name('article_store');