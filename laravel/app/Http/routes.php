<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/', 'IndexController@index');
//详情二级页面
Route::get('view', 'viewController@index');

//聊天
Route::get('chat', 'ChatController@index');

//回馈
Route::get('feedback', 'FeedbackController@index');
//景点详情
Route::get('details','DetailsController@index');
//大家喜欢
Route::get('like','LikeController@index');

//我的钱包
Route::get('money','MoneyController@index');

//我的收藏
Route::get('collection','CollectionController@index');
//登陆
Route::any('login','IndexController@login');
//注册
Route::any('register','IndexController@register');
//微博登陆
Route::any('callback','IndexController@callback');

//留言
Route::get('liuyan','TestController@liuyan');
Route::get('liuyan_add','TestController@liuyan_add');
Route::get('liuyan_del','TestController@liuyan_del');
Route::get('update','TestController@update');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
