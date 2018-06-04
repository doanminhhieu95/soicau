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

Route::get('/',[
    'as'=>'trangchu',
    'uses'=>'PageController@gettrangchu'
]);
Route::get('mien-bac',[
    'as'=>'mienbac',
    'uses'=>'PageController@getmienbac'
]);
Route::get('dang-ky',[
    'as'=>'dangky',
    'uses'=>'PageController@getdangky'
]);
Route::post('dang-ky',[
    'as'=>'dangky',
    'uses'=>'PageController@postdangky'
]);
Route::get('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@getdangnhap'
]);
Route::post('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@postdangnhap'
]);
Route::get('dang-xuat',[
    'as'=>'dangxuat',
    'uses'=>'PageController@getdangxuat'
]);
Route::get('ketqua',[
    'as'=>'ketqua',
    'uses'=>'PageController@getketqua'
]);
Route::post('ketqua',[
    'as'=>'ketqua',
    'uses'=>'PageController@postketqua'
]);
Route::get('kqxs',[
    'as'=>'kqxs',
    'uses'=>'PageController@getkqxs'
]);
Route::get('ketqua/ajax/dai/{thu}/{ngay}','AjaxController@getdai');
Route::get('kqxs/ajax/ketqua/{idcity}/{ngay}','AjaxController@getkqxs');
Route::get('ajax/city/{thu}','AjaxController@getcity');
Route::get('ajax/ketqua/{idcity}/{day}','AjaxController@getketqua');