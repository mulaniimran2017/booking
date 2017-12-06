<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// API Routes
Route::group(['prefix' => 'api'], function()
{
	// Customer API Routes
	Route::get('get-available-days', 'APIController@GetAvailableDays');

	// Admin API Routes
	Route::get('get-all-appointments', 'AdminAPIController@GetAllAppointments');
	Route::get('get-appointment-info/{id}', 'AdminAPIController@GetAppointmentInfo');
	Route::get('get-all-availability', 'AdminAPIController@GetAllAvailability');
	Route::any('set-availability', 'AdminAPIController@SetAvailability');
});

// Admin Routes
Route::group(['prefix' => 'admin'], function()
{
	Route::get('/', 'AdminController@index');
	Route::any('login', 'AdminController@login');
	Route::get('dashboard' ,function(){
	 return view('admin/layouts');
 });

	// Appointment Routes
	Route::get('appointments', 'AdminController@appointments');

	// Availability Routes
	Route::get('availability', 'AdminController@availability');
	Route::post('add/availability', 'AdminController@addAvailability');
	Route::get('setAve', function() {
   return view('admin/setAvailability');
   Route::get('packages', function() {
   return view('admin/packages/index');
   });
   Route::get('chart', function() {
   return view('admin/chart');
   });
  
});

 

	// Configuration Routes
	Route::get('configuration', 'AdminController@configuration');

	// Package Routes
	Route::get('packages', 'AdminController@packages');
	Route::get('edit-package/{package_id}', 'AdminController@editPackage');
	Route::post('update-package/{package_id}', array('as' => 'package.update'), 'AdminController@updatePackage');
});

Route::get('/', function() {
 return view('welcome');
});
Route::get('booking', 'BookingController@getIndex');

Route::controller('admin', 'AdminController');
Route::controller('booking', 'BookingController');

Route::group(['prefix' => 'userlogin'], function()
{
	Route::get('/', 'userloginController@index');
	Route::post('login', 'userloginController@login');
	

});
Route::get('/setAve', function() {
 return view('admin/setAvailablility');
});