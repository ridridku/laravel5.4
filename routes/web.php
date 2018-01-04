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
    return view('dashboard');
});


Route::get('pages',function(){
	return view('pages');
	//return 'inia';

});
Route::get('dashboard',function(){
	return view('dashboard');
	
});

Route::post('nasabah/search','nasabahController@search');
Route::resource('nasabah','nasabahController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');