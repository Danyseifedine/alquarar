<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ContentController::class, 'home'])->name('landing');
Route::get('/news/all', [ContentController::class, 'news'])->name('all.news');
Route::get('/adad', [ContentController::class, 'adad'])->name('adad');
Route::get('/contact-us', [ContentController::class, 'contact'])->name('contact');

Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/source/{source}', [NewsController::class, 'source'])->name('source.news');

Auth::routes(['verify' => true]);


Route::middleware('verified')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // dashboard activity
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/add', [NewsController::class, 'add_news'])->name('news.add');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

    // dashboard activity
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});
