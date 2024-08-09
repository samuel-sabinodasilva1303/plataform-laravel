<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/check', [AuthController::class, 'check'])->name('auth.check');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::post('/posts/list', [PostController::class, 'list'])->name('posts.list');
Route::post('/posts/tags', [PostController::class, 'filterByTag'])->name('posts.filterByTag');

Route::get('/posts/tags', [PostController::class, 'getTags'])->name('posts.getTags');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::middleware('jwt.auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::post('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
});
