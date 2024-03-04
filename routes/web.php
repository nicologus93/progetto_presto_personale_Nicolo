<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

// rotte Email

Route::get('contactus',[PublicController::class,'contactUs'])->name('contactUs');
Route::post('contactus/submit',[PublicController::class,'contactUsSubmit'])->name('contactUsSubmit');

// Rotte articoli

Route::get('/categoryShow/{category}',[PublicController::class,'categoryShow'])->name('categoryShow');
Route::get('/article/index',[ArticleController::class,'index'])->name('article_index');
Route::get('/article/create',[ArticleController::class,'create'])->name('article_create');
Route::get('/article/show/{article}',[ArticleController::class,'show'])->name('article_show');
Route::get('/article/edit/{article}',[ArticleController::class,'edit'])->name('article_edit');
Route::POST('/article/store',[ArticleController::class,'store'])->name('article_store');
Route::PUT('/article/update/{article}',[ArticleController::class,'update'])->name('article_update');
Route::delete('/article/destroy/{article}',[ArticleController::class,'destroy'])->name('article_destroy');

// Rotta ricerca articoli
Route::get('ricerca/annuncio',[PublicController::class,'searchArticles'])->name('search_articles');

// Rotte Revisori
// Rotta form richiesta Revisore
Route::get('/revisor/request/form',[RevisorController::class,'revisorRequest'])->middleware('auth')->name('revisorRequest');
// Diventa revisore
Route::post('/richiesta/revisore',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become_revisor');
// Rendi l'utente revisore
Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])->middleware('auth')->name('make_revisor');
// Home revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor_index');
// Accetta articolo
Route::patch('/revisor/accept/{article}',[RevisorController::class,'acceptArticle'])->middleware('isRevisor')->name('revisor_accept_article');
// Rifiuta articolo
Route::patch('/revisor/reject/{article}',[RevisorController::class,'rejectArticle'])->middleware('isRevisor')->name('revisor_reject_article');