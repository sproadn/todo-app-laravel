<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [TodoController::class, 'index']);

Route::get('/todos/create', [TodoController::class, 'create'])->name('create_todo');
Route::post('/todos/store', [TodoController::class, 'store'])->name('store_todo');

Route::get('/todos/details/{id}', [TodoController::class, 'details'])->name('detail_todo');