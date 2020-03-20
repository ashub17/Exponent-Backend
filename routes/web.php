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

Route::get('/', 'frontController@index');

Route::get('admin', 'adminController@admin');

Route::get('setup', 'adminController@setups');

Route::post('addSettings','crudController@insertData');

Route::get('categories', 'adminController@categories');

Route::post('addCategory','crudController@insertData');

Route::get('deleteCategory/{id}','adminController@deleteCategory');

Route::get('editCategory/{id}','adminController@editCategory');

Route::post('updateCategory/{id}','crudController@updateData');