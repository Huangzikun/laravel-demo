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

//get方式
//Route::get('/', '[控制器]@[行为]');
Route::get('/', function () {
    return view('welcome');
});
//用户模块
//注册页面
Route::get('/register', '\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
//登录页面
Route::get('/login', '\App\Http\Controllers\LoginController@index');
//登录行为
Route::post('/login', '\App\Http\Controllers\LoginController@login');
//登出
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
//个人设置页面
Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
//个人设置操作
Route::post('/user/me/setting', '\App\Http\Controllers\UserControler@settingStore');

//文章模块
//文章列表页
Route::get('/posts', '\App\Http\Controllers\PostController@index');
//文章详情页
////创建文章
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');

Route::post('/posts', '\App\Http\Controllers\PostController@store');
//编辑文章
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');
//删除文章
Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');
//

//图片上传
Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');
////指定所选方式访问
//Route::match(['get', 'post'],'/posts', '\App\Http\Controllers\PostController@index');
//
////参数绑定 占位符
//Route::get('/posts/{$id}', '\App\Http\Controllers\PostController@index');
//
////路由分组
//Route::group(['prefix' => 'posts'], function (){
//    Route::get('/', '\App\Http\Controllers\PostController@index');
//});

