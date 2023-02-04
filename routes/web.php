<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/articles/{slug}', [ArticleController::class, 'getArticle']);
Route::get('/tag/{tag}', [ArticleController::class, 'tagSearch']);
Route::get('addpost', [ArticleController::class, 'add-post']);
Route::view('test', 'login');
Route::post('post', [ArticleController::class, 'index'])->name('post');
