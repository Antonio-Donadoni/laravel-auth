<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/', 'EmployeeController@index') -> name('emp-home');
Route::get('/employee/{id}', 'EmployeeController@show') -> name('employee.show');


Route::get('/destroy/{id}', 'AuthController@destroy') -> name('employee.destroy');

Route::get('/edit/{id}', 'AuthController@edit') -> name('employee.edit');
Route::post('/update/{id}', 'AuthController@update') -> name('employee.update');

Route::get('/create', 'AuthController@create') -> name('employee.create');
Route::post('/store', 'AuthController@store') -> name('employee.store');


Route::get('/home', 'HomeController@index')->name('home');
