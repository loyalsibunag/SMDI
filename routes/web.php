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

Route::get('/', 'PostsController@bilang');
Route::get('/edit', 'PostsController@edit');
Route::get('/create', 'PagesController@create');
Route::put('filetable/{id}/edit', '@PostsController@update');
Route::resource('filetable', 'PostsController');

Route::put('filetable/reactivate/{id}','PostsController@reactivate');
Route::put('filetable/deactivate/{id}', 'PostsController@destroy');

#file handling
Route::get('importExport', 'PostsController@importExport');

Route::get('export', 'PostsController@export');
Route::get('exportSolo/{id}', 'PostsController@exportSolo');

Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
