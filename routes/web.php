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





Route::resource('categoryitem','CategoryController');



Route::get('/category','CategoryController@index');

Route::post('/store','CategoryController@store')->name('store');

//Route::get('/category','CategoryController@create')->name('create');
Route::get('update-category/{id}','CategoryController@update')->name('update_category');

Route::get('delete-category/{id}','CategoryController@delete')->name('delete');

//Route::post('category/update', 'CategoryController@update')->name('category.update');



Route::get('/video','VideoController@index')->name('video');

//Route::get('video','VideoController@videodetails')->name('videodetails');
Route::post('video','VideoController@uploadvideos')->name('uploadvideos');

Route::get('edit-video-{id}','VideoController@edit')->name('editvideo');

Route::patch('update-video/{id}','VideoController@update')->name('updatevideo');
Route::get('delete-video/{id}','VideoController@delete')->name('delete_video');



Route::get('/channel','ChannelController@index');

//Route::resource('customsearch', 'ChannelController');
Route::post('channel','ChannelController@addchannel')->name('addchannel');
Route::get('edit-channel-{id}','ChannelController@edit')->name('edit');
Route::patch('update-channel/{id}','ChannelController@update')->name('update');
Route::get('delete-channel/{id}','ChannelController@delete')->name('delete_channel');




//Route::get('/channel','ChannelController@index')->name('channel');

Route::get('/watchlive','WatchliveController@index');
Route::post('watchlive','WatchliveController@addevent')->name('addevent');

Route::get('edit-watchlive-{id}','WatchliveController@editwatchive')->name('edit_watchlive');
Route::patch('update-watchlive/{id}','WatchliveController@updatewatchlive')->name('update_watchlive');
Route::get('delete-watchlive/{id}','WatchliveController@delete')->name('delete_watchlive');



Route::resource('banner','BannerController');

 Route::get('/banner','BannerController@index');
 Route::post('banner','BannerController@addbanner')->name('addbanner');

Route::get('edit-banner-{id}','BannerController@editbanner')->name('edit');
Route::patch('update-banner/{id}','BannerController@updatebanner')->name('update');
Route::get('delete-banner/{id}','BannerController@delete')->name('delete');


Route::get('/user','UsersController@index');

