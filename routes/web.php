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

Route::get( '/', function () {
    return view( 'index' );
});

Route::get( 'home', function() {
	return view( 'index' );
});

Route::get( 'about', function() {
	return view( 'about' );
});

Route::get( 'daycare', function() {
	return view( 'daycare' );
});

Route::get( 'apply', function() {
	return view( 'apply' );
});

Route::get( 'service-areas', function() {
	return view( 'service-areas' );
});



Route::get('inquire', [
	'as' => 'inquire',
	'uses' => 'InquiryController@inquire'
]);


Route::post( 'inquire_thankyou', [
	'as' => 'inquire_thankyou',
	'uses' => 'InquiryController@inquireThankyou'
]);
