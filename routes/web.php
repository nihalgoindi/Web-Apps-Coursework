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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/blog', [PostController::class, 'index'])
    ->name('posts.index'); //->middleware(['auth']);

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create')->middleware(['auth']);

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store'); //->middleware(['auth']);

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show'); //->middleware(['auth']);

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])
    ->name('posts.edit');

Route::put('/posts/update/{id}', [PostController::class, 'update'])
    ->name('posts.update');

Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])
    ->name('posts.delete');

Route::get('/comments', [CommentController::class, 'index'])
    ->name('comments.index');

Route::get('/home', function(){
    return view('home.index');
});

require __DIR__.'/auth.php';
