<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome',['posts'=>post::paginate(6)]);
})->name('home');
Route::get('/post', [PostController::class, 'post']);
Route::post('/store', [PostController::class, 'filestore'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editpost'])->name('edit');
Route::post('/update/{id}', [PostController::class, 'updatepost'])->name('update');
Route::get('/delete/{id}', [PostController::class, 'deletepost'])->name('delete');