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
//测试页
Route::get('/', 'StaticPagesController@Home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

//注册页
Route::get('/signup', 'UsersController@create')->name('signup');

//用户列表页
Route::resource('users', 'UsersController');

//登录页
Route::get('/login', 'SessionsController@create')->name('login');
//登录逻辑
Route::post('/login', 'SessionsController@store')->name('login');
//登出
Route::delete('/logout', 'SessionsController@destroy')->name('logout');