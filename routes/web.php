<?php

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

use App\http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page', [PostController::class, 'index']);
Route::get('/my_page/create', [PostController::class, 'create']);
Route::get('/my_page/update', [PostController::class, 'update']);
Route::get('/my_page/delete', [PostController::class, 'delete']);
Route::get('/my_page/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/my_page/update_or_create', [PostController::class, 'updateOrCreate']);




