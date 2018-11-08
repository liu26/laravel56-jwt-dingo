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

//ini_set('display_errors','1');


Route::get('/', function () {

    return view('welcome');
});




//添加分类
Route::get('/cat','CategoriesController@show');
Route::post('/store','CategoriesController@store');


//一对多查询 categories  categories_attr;
Route::get('/mny',"CategoriesController@queries");














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
