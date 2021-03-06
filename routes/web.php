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





Route::group(['middleware'=>['web']], function(){

	//Route::get('auth/login', 'Auth\LoginSController@index');
	//Route::post('auth/login', 'Auth\LoginController');
	//Route::get('auth/logout', 'Auth\LoginController');

	//Route::get('auth/register', 'Auth\RegisterController');
	//Route::get('auth/register', 'Auth\RegisterController');


Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog' , ['uses' => 'BlogController@getIndex' , 'as' => 'blog.index']);
Route::get('about','PagesController@getAbout');
Route::get('contact','PagesController@getContact');
Route::get('/','PagesController@getIndex');


Route::resource('posts','PostController');


});




Route::get('/home', 'HomeController@index')->name('home');
