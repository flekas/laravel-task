<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get( '/tasks', ['as' => 'home',  'uses' => 'TasksController@index'] );
Route::post('/tasks', 'TasksController@store');
Route::patch('tasks/{id}/update', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);
Route::patch('tasks/{id}/delete', ['as' => 'tasks.delete', 'uses' => 'TasksController@delete']);
Route::get('{username}/tasks', 'UserTasksController@index');
Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@store');
