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

/*Route layout*/
Route::get('/trang-chu', 'PagesController@getHomePage');
Route::get('/blog/{NoName}_{id}.html', 'PagesController@getBlogDetail');
/*Route layout*/

/*Route admin*/
Route::group(['prefix' => 'admin'], function(){
	Route::group(['prefix' => 'danh-muc'], function(){

		Route::get('danh-sach', 'CategoryBlogController@getDanhSach');

		Route::get('them', 'CategoryBlogController@getThem');
		Route::post('them', 'CategoryBlogController@postThem');

		Route::get('sua/{id}', 'CategoryBlogController@getSua');
		Route::post('sua/{id}', 'CategoryBlogController@postSua');

		Route::get('xoa/{id}', 'CategoryBlogController@getXoa');

	});
});
/*Route admin*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');