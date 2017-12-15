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

Route::get('/','PagesController@index');

Route::get('/itservices','PagesController@itservices');

Route::get('/financeaccounting','PagesController@financeaccounting');

Route::get('/legalsupport','PagesController@legalsupport');

Route::get('/salesmarketing','PagesController@salesmarketing');

Route::get('/gallery','PagesController@gallery');

Route::get('/login','PagesController@login');
// Auth::routes();

Route::get('/admin','PagesController@Admin');

Route::get('/addjob','PagesController@addpage');

