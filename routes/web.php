<?php


/*
Make at least 10 routes without controller. 
Make at least 10 routes with controller
Make those routes 5 with view and 5 without view.*/

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
/*with controller*/
Route::get('/profile/{name}/{nick}','homeController@showPage')->where(['name'=>'[A-Za-z]+','nick'=>'[A-Za-z]+']);
Route::post('/profile','homeController@showPages');




/*without controller*/



	Route::group(['prefix'=>'profile','middleware'=>'checkGuard'],function(){
	Route::get('/user','userController@view')->name('form');
	Route::POST('/user/data','userController@getData')->name('submit');
	Route::get('/user','userController@view')->name('input');
	Route::get('/user/data','userController@getData')->name('output');

	Route::get('/home','homeController@view')->name('form');
	Route::POST('/home/data','homeController@getData')->name('submit');
	Route::get('/home','homeController@view')->name('input');
	Route::get('/home/data','homeController@getData')->name('output');
	
	Route::get('/about','aboutController@view')->name('form');
	Route::POST('/about/data','aboutController@getData')->name('submit');
	Route::get('/about','aboutController@view')->name('input');
	Route::get('/about/data','aboutController@getData')->name('output');
	
	Route::get('/service','serviceController@view')->name('form');
	Route::POST('/service/data','serviceController@getData')->name('submit');
	Route::get('/service','serviceController@view')->name('input');
	Route::get('/service/data','serviceController@getData')->name('output');
	
	Route::get('/contact','contactController@view')->name('form');
	Route::POST('/contact/data','contactController@getData')->name('submit');
	Route::get('/contact','contactController@view')->name('input');
	Route::get('/contact/data','contactController@getData')->name('output');
	


});