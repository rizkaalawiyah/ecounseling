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
    return view('blog/home');
});

Route::group(['middleware' => 'web'], function (){
	Route::auth();
});

Route::group(['middleware' => ['web', 'auth']], function(){
	Route::get('/home', 'HomeController@index');
	Route::get('/', function(){
		if(Auth::user()->admin == 1){
			return view('private');
		}else{
		
			return view('blog/home');
		}
	});
});


Route::get('admin', ['middleware' => ['web', 'auth', 'admin'], function(){
	return view('blog/price');
}]);

Route::get('blog/home', 'BlogController@index');
Route::get('blog/about', 'BlogController@about');
Route::get('blog/price', 'BlogController@price');
Route::get('blog/post', 'BlogController@post');
Route::get('blog/faq', 'BlogController@faq');

Route::get('admin/dashboard', 'BlogController@dashboard');
Route::get('admin/user', 'BlogController@user');
Route::get('admin/dataperkenalan', 'BlogController@dataperkenalan');


Route::get('blog/perkenalan', 'FileController@form')->name('blog.perkenalan');
Route::post('blog/upload', 'FileController@upload')->name('blog.upload');

Route::get('blog/lega', 'LegaController@form')->name('blog.lega');
Route::post('blog/upload', 'LegaController@upload')->name('blog.upload');

Route::get('blog/nyaman', 'NyamanController@form')->name('blog.nyaman');
Route::post('blog/upload', 'NyamanController@upload')->name('blog.upload');

Route::get('blog/bahagia', 'BahagiaController@form')->name('blog.bahagia');
Route::post('blog/upload', 'BahagiaController@upload')->name('blog.upload');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/private', 'HomeController@private')->name('private');
Route::get('/users', 'HomeController@users')->name('users');

Route::get('messages', 'MessageController@fetchMessages');
Route::post('messages', 'MessageController@sendMessage');
Route::get('/private-messages/{user}', 'MessageController@privateMessages')->name('privateMessages');
Route::post('/private-messages/{user}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');

//user2
