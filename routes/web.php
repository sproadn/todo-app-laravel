<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/todos', [TodoController::class, 'index'])->name('todo_index');

Route::get('/todos/create', [TodoController::class, 'create'])->name('create_todo');
Route::post('/todos/store', [TodoController::class, 'store'])->name('store_todo');

Route::get('/todos/edit/{id}', [TodoController::class, 'edit'])->name('edit_todo');
Route::post('/todos/update', [TodoController::class, 'update'])->name('update_todo');

Route::get('/todos/delete/{id}', [TodoController::class, 'delete'])->name('delete_todo');

Route::get('/todos/changeStatus/{id}', [TodoController::class, 'changeStatus'])->name('changeTodoStatus');

Route::get('/todos/details/{id}', [TodoController::class, 'details'])->name('detail_todo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
