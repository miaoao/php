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
    return view('index');
});

/*Route::get('/hello', function () {
    return '<h2>this is the test page</h2>';
});
Route::get('user/{id}', 'UserController@showProfile');*/
route::get('/products','productController@index');
route::get('/product/show/{id}','productController@show');
route::get('/product/edit/{id?}','productController@edit');
route::get('/product/save/{id?}','productController@save');
route::get('/product/delete/{id}','productController@delete');
route::get('/product/send','productController@testsend');
route::get('/product/receive','productController@testreceive');