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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/dangnhap','UserController@getLogin');
Route::post('admin/dangnhap','UserController@postLogin');
Route::get('admin/dangxuat','UserController@getLogout');

Route::group(['prefix'=>'admin'],function()
//Route::group(['prefix'=>'admin','middleware'=>'checklogin'],function()
{
	Route::get('/','ProductTypeController@getList');
    // Route::get('/','AdminController@getdashboard');
	Route::group(['prefix'=>'product_type'],function()
	{
		Route::get('list','ProductTypeController@getList');
		Route::get('add','ProductTypeController@getAdd');
		Route::post('add','ProductTypeController@postAdd');
		Route::get('edit/{id}','ProductTypeController@getEdit');
		Route::post('edit/{id}','ProductTypeController@postEdit');
		Route::get('delete/{id}','ProductTypeController@getDel');
	});

	Route::group(['prefix'=>'product'],function()
	{
		Route::get('list','ProductController@getList');
		Route::get('add','ProductController@getAdd');
		Route::post('add','ProductController@postAdd');
		Route::get('edit/{id}','ProductController@getEdit');
		Route::post('edit/{id}','ProductController@postEdit');
		Route::get('delete/{id}','ProductController@getDel');
	});

	Route::group(['prefix'=>'slide'],function()
	{
		Route::get('list','SlideController@getList');
		Route::get('add','SlideController@getAdd');
		Route::post('add','SlideController@postAdd');
		Route::get('edit/{id}','SlideController@getEdit');
		Route::post('edit/{id}','SlideController@postEdit');
		Route::get('delete/{id}','SlideController@getDel');
	});

	Route::group(['prefix'=>'user'],function()
	{
		Route::get('list','UserController@getList');
		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd');
		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');
		Route::get('delete/{id}','UserController@getDel');
	});

	Route::group(['prefix'=>'customer'],function()
	{
		Route::get('list','CustomerController@getList');
		Route::get('edit/{id}','CustomerController@getEdit');
		Route::post('edit/{id}','CustomerController@postEdit');
		Route::get('delete/{id}','CustomerController@getDel');
	});

	Route::group(['prefix'=>'bill'],function()
	{
		Route::get('list','BillController@getList');
		Route::get('edit/{id}','BillController@getEdit');
		Route::post('edit/{id}','BillController@postEdit');
		Route::get('delete/{id}','BillController@getDel');
		Route::get('del-product/{id_bill}/{id_product}','BillController@delProduct');
	});
});

