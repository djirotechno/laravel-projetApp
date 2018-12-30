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


Route::get('/','ProjectsController@index')->name('projects.index');

Route::get('/projects/create','ProjectsController@create')->name('projects.create');

Route::post('/project','ProjectsController@store')->name('project.store');

Route::get('/projects/{project}','ProjectsController@show')->name('projects.show');

Route::get('/projects/{project}/edit','ProjectsController@edit')->name('projects.edit');

Route::put('/projects/{project}','ProjectsController@update')->name('projects.update');

Route::delete('/projects/{project}','ProjectsController@destroy')->name('projects.destroy');

Route::patch('/tasks/{task}','ProjectsTasksController@update');


