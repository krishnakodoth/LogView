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
Route::get('devstatus', 'KPsPckg\LogView\LogViewerController@home');
Route::get('devstatus/{username}', 'KPsPckg\LogView\LogViewerController@index');