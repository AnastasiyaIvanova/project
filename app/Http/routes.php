<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


    Route::auth();
    Route::resource('tasks','TaskController');
    Route::post('/task', 'TaskController@store');
    Route::get('/tasks', 'TaskController@index');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::get('/', function () {
    return view('welcome');});
