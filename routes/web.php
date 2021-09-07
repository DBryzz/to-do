<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

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

/* Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/create', [TodoController::class, 'store'])->name('todo.post');
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::patch('/todo/{todo}/update', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/{todo}/delete', [TodoController::class, 'delete'])->name('todo.destroy');
 */


/* Route::middleware('auth')->group(function ()
{ 
    # code...
    Route::resource('todo', TodoController::class)->middleware('auth');

    Route::put('/todo/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
    Route::put('/todo/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');

 });

                        OR

Route::resource('todo', TodoController::class)->middleware('auth');
*/

Route::resource('todo', TodoController::class);

Route::put('/todo/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
Route::put('/todo/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');


Route::get('/', function () {
    return view('home');
});

// Route::get('/user', 'UserController@index'); old way of doing it
Route::get('/user', [UserController::class, 'index']); // new way

Route::post('/upload', [UserController::class, 'upload']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
