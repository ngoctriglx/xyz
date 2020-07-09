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
//test
// Route::get('master', function () {
//     return view('admin.master');
// });
Route::get('resetpw', function () {
    return view('home.resetpassword');
});
/////////////////////////
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

    Route::post('/resetpw','User\ResetPassword@postResetPw')->name('user.post.resetpw');
    Route::get('password/reset/{remember_token}','User\ResetPassword@checktoken');
    Route::post('password/newpass',"User\ResetPassword@newPass")->name('user.post.newpass');
});

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/','Admin\ShowController@getDashboard')->name('admin.get.dashboard');
    Route::get('/post','Admin\ShowController@getPost')->name('admin.get.post');

    Route::get('/create','Admin\CreateController@getCreate')->name('admin.get.create');
    Route::post('/create','Admin\CreateController@postCreate')->name('admin.post.create');

    Route::get('/add','Admin\PostController@getAdd')->name('admin.get.add');
    Route::post('/add','Admin\PostController@postAdd')->name('admin.post.add');
    

});