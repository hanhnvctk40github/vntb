<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\FacebookController;
use App\Http\Middleware\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/detail/{id}', [ArticleController::class, 'detail'])->name('detail');

Route::get('/admin/login', [AdminController::class, 'login_index']);
Route::post('/admin/login-admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::prefix('/admin')->middleware([Auth::class])->group(function () {
       // Article
       Route::get('/article', [ArticleController::class, 'index'])->name('admin.article.index');
       Route::get('/article/add', [ArticleController::class, 'addGet'])->name('admin.article.add.get');
       Route::post('/article/add', [ArticleController::class, 'addPost'])->name('admin.article.add.post');
       
       Route::get('/article/edit/{id}', [ArticleController::class, 'editGet'])->name('admin.article.edit.get');
       Route::post('/article/edit', [ArticleController::class, 'editPost'])->name('admin.article.edit.post');
       Route::get('/article/delete/{id}', [ArticleController::class, 'delete'])->name('admin.article.delete');
   
       Route::post('/article/upload', [ArticleController::class, 'upload'])->name('admin.article.upload');
       Route::get('/info', [InfoController::class, 'index'])->name('admin.info.index');
});

Route::get('/facebook/login', [FacebookController::class, 'getLogin'])->name('getLogin');
Route::post('/postLogin', [FacebookController::class, 'postLogin'])->name('postLogin');

