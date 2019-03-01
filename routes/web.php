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
Route::get('/forgot-password', 'CruiseController@resetPasswordForm');
Route::match(['PUT', 'PATCH'], '/forgot-password', 'CruiseController@resetPasswordSubmit')->name('cruisehome.resetPassword');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
	//inquiries-management
    Route::get('/', 'DashboardController@showInquiries')->name('inquiries.showInquiries');
    Route::get('/export', 'DashboardController@exportToCSV')->name('inquiries.exportToCSV');
    Route::delete('/destroyInquiry/{id}', 'DashboardController@deleteInquiry')->name('inquiries.destroyInquiry');
    Route::get('/getInquiryByDate', 'DashboardController@getInquiryByDate')->name('inquiries.getInquiryByDate');

    //users-management

    Route::group(['middleware' => 'admin.access'], function() {
        
        Route::get('/user-management', 'UserController@usersList')->name('usermanagement.usersList');
        Route::post('/user-management', 'UserController@addUser')->name('usermanagement.addUser');
        Route::match(['PUT', 'PATCH'], 'user-management/edit/{user}', 'UserController@editUser')->name('usermanagement.editUser');
        Route::delete('/user-management/delete/{user}', 'UserController@deleteUser')->name('usermanagement.deleteUser');
        Route::get('/role-management', 'UserController@rolesList')->name('usermanagement.rolesList');
        Route::post('/role-management', 'UserController@addRole')->name('usermanagement.addRole');
        
    });
    
});
