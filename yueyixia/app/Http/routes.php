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

//查询
Route::get('search', 'SearchController@index');
Route::get('check', 'SearchController@check');  //详细查询

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
Route::get('collection_add', 'CollectionController@c_add'); //添加收藏

//登录
Route::get('register','RegisterController@register');
//注册
Route::get('registered','RegisterController@registered');

//登陆
Route::any('login','IndexController@login');
//注册
Route::any('register','IndexController@register');
//微博登陆
Route::any('callback','IndexController@callback');

//用户设置------修改个人资料
Route::any('edit','UserController@edit');
Route::any('edit_add','UserController@edit_add');
//用户设置-------更改头像
Route::any('edit_avatar','UserController@edit_avatar');
//用户设置-------修改密码
Route::any('edit_pwd','UserController@edit_pwd');
Route::any('pwd_update','UserController@pwd_update');
//用户设置-------修改手机号
Route::any('edit_phone','UserController@edit_phone');
//用户设置-------绑定邮箱
Route::any('edit_email','UserController@edit_email');
Route::get('send','UserController@send');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
