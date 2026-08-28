<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;





Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

Route::get('/create/article' , [ArticleController::class , 'create'])->name('articles.create');

Route::get('/create/index' , [ArticleController::class , 'index'])->name('articles.index');

Route::get('/show/article/{article}' , [ArticleController::class , 'show'])->name('articles.show');

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('articles.byCategory');

Route::get('/my/articles', [ArticleController::class, 'myArticles'])->name('articles.myArticles');

Route::get('/revisor/index' , [RevisorController::class , 'index'])->name('revisor.index')->middleware('isRevisor');

Route::patch('/accept/{article}' , [RevisorController::class , 'accept'])->name('accept')->middleware('isRevisor');

Route::patch('/reject/{article}' , [RevisorController::class , 'reject'])->name('reject')->middleware('isRevisor');

Route::get('/become/revisor', [RevisorController::class, 'becomeRevisor'])->name('become.revisor')->middleware('auth');

Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/become/revisor/info', [RevisorController::class, 'becomeRevisorInfo'])->name('revisor.become')->middleware('auth');

Route::get('/search/article', [PublicController::class, 'searchArticle'])->name('article.search');