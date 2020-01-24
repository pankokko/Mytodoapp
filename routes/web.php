<?php

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
Route::get("/", "TodoController@index")->name("todo/index");
Route::get("todo/new", "TodoController@new")->name("todo/new");
Route::post("todo/create", "TodoController@create")->name("todo/create");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
