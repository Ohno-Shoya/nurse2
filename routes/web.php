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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); 
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth'); 
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth'); 
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    Route::get('profile/delete', 'Admin\ProfileController@delete')->middleware('auth');
    Route::get('post/create', 'Admin\PostController@add')->middleware('auth');
    Route::post('post/create', 'Admin\PostController@create')->middleware('auth');
    Route::get('post', 'Admin\PostController@index')->middleware('auth');
    Route::get('post/edit', 'Admin\PostController@edit')->middleware('auth'); 
    Route::post('post/edit', 'Admin\PostController@update')->middleware('auth'); 
    Route::get('post/delete', 'Admin\PostController@delete')->middleware('auth');
    Route::get('comment/create','Admin\CommentController@add')->middleware('auth');
    Route::post('comment/create','Admin\CommentController@create')->middleware('auth');
    

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
