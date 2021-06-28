<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::view('/posts/create', 'create');
Route::post('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post');

Route::get('/today', [PostController::class, 'today'])->name('today');

Auth::routes();

Route::get(
    '/home', 
    [App\Http\Controllers\PostController::class, 'index'])->name('home');

    Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('user/{user}',[UserController::class, 'update'])->name('users.update');
    Route::get('user/delete',[UserController::class, 'destroy'])->name('users.delete');
    Route::get('/notificaciones', [CommentController::class, 'notificaciones']);
    Auth::routes();