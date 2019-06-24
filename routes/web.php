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

//邮箱确认
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

//重置密码

//显示重置密码的邮箱发送页面
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//邮箱发送重设链接
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//密码更新页面
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//执行密码更新操作
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//weibo
Route::resource('statuses', 'StatusesController', ['only'=>['store','destroy']]);

//粉丝页面
Route::get('/users/{user}/followings','UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers','UsersController@followers')->name('users.followers');

//关注 取消关注
Route::post('/users/followers/{user}','FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{user}','FollowersController@destroy')->name('followers.destroy');