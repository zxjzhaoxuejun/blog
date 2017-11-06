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

Route::get('/', function () {
    return view('welcome');
});
Route::any('admin/login','Admin\LoginController@login');
Route::get('admin/code','Admin\LoginController@code');
Route::any('admin/pass','Admin\IndexController@pass');
Route::resource('admin/category','Admin\CategoryController');

Route::resource('admin/article','Admin\ArticleController');

Route::group(['middleware'=>['web','admin.login']],function (){
    Route::any('admin/index','Admin\IndexController@index');
    Route::get('admin/info','Admin\IndexController@info');
    Route::any('admin/quit','Admin\LoginController@quit');
    Route::any('admin/cate/changeorder','Admin\CategoryController@changeOrder');

    Route::any('admin/upload','Admin\CommonController@upload');

});


