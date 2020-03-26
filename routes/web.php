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

Route::get('home', 'adminController@homes');

Route::post('addHomes','crudController@insertPageData');

Route::get('deleteHome/{hid}','adminController@deleteHome');

Route::get('editHome/{hid}','adminController@editHome');

Route::post('updateHome/{hid}','crudController@updatePageData');

Route::get('about', 'adminController@abouts');

Route::post('addAbout','crudController@insertPageData');

Route::get('deleteAbout/{id}','adminController@deleteAbout');

Route::get('editAbout/{aid}','adminController@editAbout');

Route::post('updateAbout/{aid}','crudController@updatePageData');

Route::get('service', 'adminController@services');

Route::post('addServices','crudController@insertPageData');

Route::get('deleteService/{sid}','adminController@deleteService');

Route::get('editService/{sid}','adminController@editService');

Route::post('updateService/{sid}','crudController@updatePageData');