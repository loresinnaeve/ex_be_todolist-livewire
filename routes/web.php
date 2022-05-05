<?php

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
    return redirect('/todo'); //de home van de frontend
});



Route::get('/todo', 'App\Http\Controllers\TodoListController@index')->name('index.todos');
Route::post('/todo', 'App\Http\Controllers\TodoListController@store')->middleware('verified')->name('store.todo');
Route::delete('/{todo}', 'App\Http\Controllers\TodoListController@destroy')->middleware('verified')->name('destroy.todo');

Auth::routes(['verify'=>true]);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
