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

Route::get( '/', ['as' => 'home',  'uses' => 'TasksController@index'] );
Route::post('/tasks', 'TasksController@store');
Route::patch('tasks/{id}', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);
Route::get('{username}/tasks', 'UserTasksController@index');
