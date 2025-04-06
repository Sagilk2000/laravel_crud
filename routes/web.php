<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategortyController;

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

Route::get('category', [CategortyController::class, 'index'])->name('category.index');
Route::get('category/create', [CategortyController::class, 'create'])->name('category.create');
Route::post('category', [CategortyController::class, 'store'])->name('category.store');
Route::get('category/{id}/edit', [CategortyController::class, 'edit'])->name('category.edit');