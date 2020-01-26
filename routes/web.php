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
// */
// Route::get("/", "TodoController@index")->name("todo/index");

Route::get("todo/{id}/new", "TodoController@new")->name("todo/new");
Route::post("todo/create", "TodoController@create")->name("todo/create");
Route::get("todo/{id}/edit","TodoController@edit")->name("todo/edit");
Route::put("todo/{id}/update","TodoController@update")->name("todo/update");

Route::get("folder/{id}/show","FoldersController@show")->name("folder/show");
Route::get("/","FoldersController@index")->name("folder/index");
Route::post("folder/create", "FoldersController@create")->name("folder/create");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
