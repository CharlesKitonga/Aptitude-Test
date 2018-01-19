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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
    Route::get('/',function (){
        return view('admin.index');
    })->name('admin.index');

    Route::get('/admin', 'UploadController@index');

    Route::get('/Addp', 'AddpController@index')->name('Addp.create');
    
	Route::post('/', 'AddpController@post')->name("post_data");
    
	Route::get('/public/{path}', 'AddpController@download');

    });