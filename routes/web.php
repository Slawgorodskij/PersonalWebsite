<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DifferentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TravelController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/category/{id}', [CategoryController::class, 'oneCategory'])->name('category');
Route::get('/article/{id}', [ArticleController::class, 'oneArticle'])->name('article');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::resource('feedback', FeedbackController::class);

Route::middleware('role:admin')
    ->prefix('admin')
    ->group(function () {
        Route::resource('/article', AdminArticleController::class);
        Route::resource('/category', AdminCategoryController::class);
        Route::resource('/images', AdminImageController::class);
        Route::resource('/reviews', AdminFeedbackController::class);

        Route::get('/index', [AdminController::class, 'index'])->name('home_admin');
        Route::get('/articles', [AdminController::class, 'article'])->name('article_admin');
        Route::get('/categories', [AdminController::class, 'category'])->name('category_admin');

    });

require __DIR__ . '/auth.php';
