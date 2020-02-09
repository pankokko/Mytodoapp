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
Route::delete("todo/{id}/delete","TodoController@delete")->name("todo/delete");

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('/login/callback/github', 'Auth\LoginController@handleProviderCallback');

Route::get("folder/{id}/show","FoldersController@show")->name("folder/show");
Route::get("/","FoldersController@index")->name("folder/index");
Route::get("folder/{id}/done","FoldersController@done")->name("folder/done");
Route::post("folder/create", "FoldersController@create")->name("folder/create");
Route::get("invitation/new", "InvitationsController@new")->name("invitation/new");

Auth::routes();

Route::post("/invitation/create","InvitationsController@create");

Route::get("/user/{id}/show","UserController@show")->name("user/show");
Route::get("/user/{id}/list","UserController@list")->name("user/list");
Route::get("/user/{id}/edit","UserController@edit")->name("user/edit");
Route::put("/user/{id}/update","UserController@update")->name("user/update");
// Route::get('/home', 'HomeController@index')->name('home');
