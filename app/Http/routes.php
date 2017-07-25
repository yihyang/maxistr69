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

Route::get("/","LoginController@showLoginPage");

Route::post("/login","LoginController@processLogin");
Route::get("/login","LoginController@showLoginPage");
Route::get("/logout","LoginController@processLogout");

Route::group(['middleware' => ['auth', 'roleAdmin'], 'prefix' => 'admin'], function () {

    Route::get('/', 'AdminController@welcomeScreen');

    Route::get('/broadband', 'TertiobroadbandController@index');

    Route::get('/application-list', 'ApplicationController@listAllApplications');
    Route::get('/application-search', 'ApplicationController@showSearchView');
    Route::get('/application/delete/{applicationId}', 'ApplicationController@deleteApplicationById');
    Route::post('/application/ajax-search-application', 'ApplicationController@getSearchResult');

});
