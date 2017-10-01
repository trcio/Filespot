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

Route::get('/', 'IndexController@get')->name('index');

Route::post('/upload', 'UploadController@post')->name('upload');

Route::get('/{file}', 'FileController@preview')->name('file.preview');
Route::get('/d/{file}', 'FileController@download')->name('file.download');
