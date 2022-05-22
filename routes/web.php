<?php

use App\Http\Controllers\Admin\Post\AdminCreateController;
use App\Http\Controllers\Admin\Post\AdminEditController;
use App\Http\Controllers\Admin\Post\AdminIndexController;
use App\Http\Controllers\Admin\Post\AdminShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/posts', [IndexController::class, '__invoke'])->name('post.index');
Route::get('/posts/create', [CreateController::class, '__invoke'])->name('post.create');
Route::post('/posts', [StoreController::class, '__invoke'])->name('post.store');
Route::get('/posts/{post}', [ShowController::class, '__invoke'])->name('post.show');
Route::get('/posts/{post}/edit', [EditController::class, '__invoke'])->name('post.edit');
Route::patch('/posts/{post}', [UpdateController::class, '__invoke'])->name('post.update');
Route::delete('/posts/{post}', [DestroyController::class, '__invoke'])->name('post.destroy');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::group(['namespace' => 'Post'], function (){
        Route::get('/post', [AdminIndexController::class, '__invoke'])->name('admin.post.index');
        Route::get('/post/{post}', [AdminShowController::class, '__invoke'])->name('admin.post.show');
        Route::get('/post/{post}/edit', [AdminEditController::class, '__invoke'])->name('admin.post.edit');
        Route::get('/post/create', [AdminCreateController::class, '__invoke'])->name('admin.post.create');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

