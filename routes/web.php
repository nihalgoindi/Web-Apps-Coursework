<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/blog', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create')->middleware(['auth']);

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store'); //->middleware(['auth']);

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show'); 

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])
    ->name('posts.edit')->middleware(['auth']);

Route::put('/posts/update/{id}', [PostController::class, 'update'])
    ->name('posts.update')->middleware(['auth']);

Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])
    ->name('posts.delete')->middleware(['auth']);

Route::post('comments/{post_id}', [CommentController::class, 'store'])
    ->name('comments.store')->middleware(['auth']);

Route::get('comments/edit/{id}', [CommentController::class, 'edit'])
    ->name('comments.edit')->middleware(['auth']);

Route::put('comments/update/{id}', [CommentController::class, 'update'])
    ->name('comments.update')->middleware(['auth']);

Route::delete('/comments/delete/{id}', [CommentController::class, 'destroy'])
    ->name('comments.delete')->middleware(['auth']);



require __DIR__.'/auth.php';
