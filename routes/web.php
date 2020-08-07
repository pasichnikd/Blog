<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index');
Route::resource('/post', 'PostController');

//Route::get('post/', 'PostController@index') -> name('post.index');
//Route::get('post/create', 'PostController@create') -> name('post.create');
//Route::get('post/show/{id}', 'PostController@show') -> name('post.show');
//Route::get('post/edit/{id}', 'PostController@edit') -> name('post.edit');
//Route::post('post/', 'PostController@store') -> name('post.store');
//Route::patch('post/how/{id}', 'PostController@update') -> name('post.update');
//Route::delete('post/{id}', 'PostController@destroy') -> name('post.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
