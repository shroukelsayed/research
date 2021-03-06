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

Route::get('/test', function (){
    return $cases = \App\Cases::first();
});

Auth::routes();


Route::post('cases' , 'CasesController@store');

Route::group(['middleware' => 'auth'] , function (){

	Route::group(['middleware' => 'check_route'] , function (){
		Route::group(['middleware' => 'super_admin'] , function (){

			Route::resource('users' , 'UserController');

		});
	});

	//dashboard index
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    //search action
    Route::get('cases/filter' , 'SearchController@index');
    Route::post('cases/search' , 'SearchController@search');

    //cases crud
    Route::get('cases', 'CasesController@index');
    Route::get('cases/create' , 'CasesController@create');
    Route::get('cases/{id}', 'CasesController@view');
    Route::get('cases/{id}/edit', 'CasesController@edit');
    Route::patch('cases/{id}/update', 'CasesController@update');
    Route::delete('cases/{id}', 'CasesController@destroy')->name('delete-case');

    //printing layout
    Route::get('cases/{id}/print', 'CasesController@printView')->name('case-print');


    Route::get('add-governorate' , 'HomeController@addGovernorate');
    Route::post('store-governorate' , 'HomeController@storeGovernorate');
    Route::get('add-city' , 'HomeController@addCity');
    Route::post('store-city' , 'HomeController@storeCity');
    Route::get('add-district' , 'HomeController@addDistrict');
    Route::post('store-district' , 'HomeController@storeDistrict');
    Route::get('add-following' , 'HomeController@addFollowing');
    Route::post('store-following' , 'HomeController@storeFollowing');

    Route::get('get-gov/{id}' , 'HomeController@getGovernorate');
    Route::get('get-city/{id}' , 'HomeController@getCity');
    Route::get('get-district/{id}' , 'HomeController@getDistrict');
    Route::get('get-following/{id}' , 'HomeController@getFollowing');

    Route::get('get-cities' , 'HomeController@getCities');
    Route::get('get-districts' , 'HomeController@getDistricts');
    Route::get('get-followings' , 'HomeController@getFollowings');

    Route::post('edit-gov', 'HomeController@editGovernorate');
    Route::post('edit-city', 'HomeController@editCity');
    Route::post('edit-district', 'HomeController@editDistrict');
    Route::post('edit-following', 'HomeController@editFollowig');


});



