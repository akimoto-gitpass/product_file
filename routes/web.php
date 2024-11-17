<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


Route::get('/testindexs', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('/testindexs/create', [App\Http\Controllers\ProductController::class, 'create'])->name('testcreates');
Route::post('/testindexs/store', [App\Http\Controllers\ProductController::class, 'store'])->name('teststore');

Route::get('/testindexs/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('testedit');
Route::get('/product/{product?}', [App\Http\Controllers\ProductController::class, 'show'])->name('testshow');

Route::put('/testindexs/update', [App\Http\Controllers\ProductController::class, 'update'])->name('testupdate');
Route::delete('/product{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('testdestroy');

