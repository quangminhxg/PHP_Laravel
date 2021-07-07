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
    return view('welcome');
});

Route::get('index/{id}', 'ArticleController@index');
Route::post('article/create', 'ArticleController@create');
Route::post('article/update', 'ArticleController@update');
Route::get('article/edit/{id}', ['uses' => 'ArticleController@edit', 'as'=>'edit']);
Route::get('article/delete/{id}', ['uses' => 'ArticleController@destroy', 'as'=>'delete']);
