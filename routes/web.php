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


Route::get('/', 'CruiseController@showCruiseForm')->name('cruisehome.index');
Route::post('/store', 'CruiseController@storeCruiseForm')->name('cruisehome.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', 'DashboardController@showInquiries')->name('inquiries.showInquiries');
    Route::get('/export', 'DashboardController@exportToCSV')->name('inquiries.exportToCSV');
    Route::get('/user-management', 'UserController@usersList')->name('usermanagement.usersList');
    Route::post('/user-management', 'UserController@addUser')->name('usermanagement.addUser');
});
