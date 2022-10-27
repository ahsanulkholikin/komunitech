<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Komunitas
Route::get('/k', [App\Http\Controllers\KomunitasController::class, 'list'])->name('k.list');
Route::get('/k/{k_slug}', [App\Http\Controllers\KomunitasController::class, 'detail'])->name('k.detail');

// Post
Route::get('/k/{k_slug}/post/{id}/{p_slug}', [App\Http\Controllers\PostController::class, 'detail'])->name('p.detail');

// TESTING ONLY
Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test');
