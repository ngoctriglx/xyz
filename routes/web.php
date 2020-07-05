<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/','Admin\hihi@gethihi');
//Route::get('/','Home\ShowController@getHome');

Route::group(['prefix' => 'home'], function () {

    Route::get('/','Home\ShowController@getHome')->name('home.get.home');
    Route::get('/blog','Home\ShowController@getBlog')->name('home.get.blog');
    Route::get('/{title}','Home\ShowController@getBlogdetail')->name('home.get.blogdetail');
    
    
});

Route::group(['prefix' => 'user'], function () {

    Route::get('/login','User\LoginController@getLogin')->name('user.get.login');
    Route::post('/login','User\LoginController@postLogin')->name('user.post.login');
    Route::get('/logout','User\LoginController@getLogout')->name('user.get.logout');

    Route::get('/loginfacebook/{provider}','User\LoginController@getFacebookRedirect')->name('user.get.facebookredirect');
    Route::get('/loginfacebook/{provider}/callback','User\LoginController@getFacebookCallback')->name('user.get.facebookcallback');

    Route::get('/logingoogle/{provider}','User\LoginController@getGoogleRedirect')->name('user.get.googleredirect');
    Route::get('/logingoogle/{provider}/callback','User\LoginController@getGoogleCallback')->name('user.get.googlecallback');
});

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/create','Admin\CreateController@getCreate')->name('admin.get.create');
    Route::post('/create','Admin\CreateController@postCreate')->name('admin.post.create');
    

});