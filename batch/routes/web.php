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
Route::get('url', function () {
     return view('url');
});
Route::get('index1', function () {
    return 'this is index1';
});
Route::get('/user', 'UserController@index');

Route::match(['get', 'post'], 'index3', function () {
    return 'This is a request from get or post and function is Route::match';
});

Route::view('index2','index2',['name'=>'out put a param in the view']);
Route::get('middleware',function() {
	return 'this is middleware';
})->middleware('token');