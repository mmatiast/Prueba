<?php


Route::get('/proyecto', 'App\Http\Controllers\ProjectController@index')->name('projects.index');
Route::get('/proyecto/create', 'App\Http\Controllers\ProjectController@create')->name('projects.create');

Route::get('/proyecto/{project}/edit', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');
Route::patch('/proyecto/{id}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');
Route::post('/proyecto', 'App\Http\Controllers\ProjectController@store')->name('projects.store');
Route::get('/proyecto/{id}/show', 'App\Http\Controllers\ProjectController@show')->name('projects.show');
Route::delete('/proyecto/{project}', 'App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');
