<?php


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
