<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;




Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

Route::get('/create/article' , [ArticleController::class , 'create'])->name('articles.create');

Route::get('/create/index' , [ArticleController::class , 'index'])->name('articles.index');

Route::get('/show/article/{article}' , [ArticleController::class , 'show'])->name('articles.show');

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('articles.byCategory');

Route::get('/my/articles', [ArticleController::class, 'myArticles'])->name('articles.myArticles');
