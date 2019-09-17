<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Ñ
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/add' , 'ProjectsController@create');
Route::get('/projects/store', 'ProjectsController@store');
Route::get('/projects/{projects}', 'ProjectsController@show');