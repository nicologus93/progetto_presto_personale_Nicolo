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

Route::get('/categoryShow/{category}',[PublicController::class,'categoryShow'])->name('categoryShow');
Route::get('/article/index',[ArticleController::class,'index'])->name('article_index');
Route::get('/article/create',[ArticleController::class,'create'])->name('article_create');
Route::get('/article/show/{article}',[ArticleController::class,'show'])->name('article_show');
Route::get('/article/edit/{article}',[ArticleController::class,'edit'])->name('article_edit');
Route::POST('/article/store',[ArticleController::class,'store'])->name('article_store');
Route::PUT('/article/update/{article}',[ArticleController::class,'update'])->name('article_update');
Route::delete('/article/destroy/{article}',[ArticleController::class,'destroy'])->name('article_destroy');