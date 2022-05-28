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


Route::group(['middleware'=>['web']],function() { 
    Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']); 
    Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']); 
    Route::post('logout', [ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout']); 
    

    Route::get('/Admin','AdminController@index');

    Route::get('/Admin/Profile/edit/{id}','ProfileController@edit')->name('profile.edit');
    Route::post('/Admin/Profile/update/{id}','ProfileController@update')->name('profile.update');
    Route::get('/Admin/Profile/create','ProfileController@create');
    Route::post('/Admin/Profile/store','ProfileController@store');

    Route::get('/Admin/Partner/edit/{id}','PartnerController@edit');
    Route::get('/Admin/Partner/create','PartnerController@create');
    Route::post('/Admin/Partner/store','PartnerController@store');
    Route::get('/Admin/Partner/delete/{id}','PartnerController@destroy');
    Route::post('/Admin/Partner/update/{id}','PartnerController@update')->name('partner.update');

    // Route::get('/Admin/Portofolio','PortofolioController@index');
    Route::get('/Admin/Portofolio/edit/{id}','PortofolioController@edit');
    Route::get('/Admin/Portofolio/create','PortofolioController@create');
    Route::post('/Admin/Portofolio/store','PortofolioController@store');
    Route::get('/Admin/Portofolio/delete/{id}','PortofolioController@destroy');
    Route::post('/Admin/Portofolio/update/{id}','PortofolioController@update')->name('portofolio.update');
}); 
Route::get('/', 'HomeController@index')->name('home');
