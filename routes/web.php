<?php

use Illuminate\Support\Facades\Route;


//route cua trang ban dien thoai

Route::get('/','ProductController@index');

Route::get('/dang-nhap','UserController@signin');
//Route::get('/dang-ki','UserController@signup');
//Route::post('/dang-ki','UserController@postsignup');
Route::get('/loai-san-pham/{id}','ProductController@getProductByType');
Route::get('/gioi-thieu','PageController@about');
Route::get('/chi-tiet/{id}', 'ProductController@getProductDetail');
Route::get('/lien-he', 'PageController@contact');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/products', 'AdminController@getProducts');
Route::get('/admin/add-product', 'AdminController@addProduct');
Route::post('/admin/add-product', 'AdminController@postAddProduct');
Route::get('/admin/bills', 'AdminController@getBill');

Route::get('dang-ki',[
	'as'=>'signup',
	'uses'=>'UserController@getsignup']);

Route::post('dang-ki',[
	'as'=>'signup',
	'uses'=>'UserController@postsignup']);
// da chinh sua tai nhanh hoang.huynh








