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

Route::get('/projects/{$id}','ProjectsController@show')->name('projects.show');

