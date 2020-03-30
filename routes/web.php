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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function (){

    Route::get('/profile', 'ProfileController@getProfile')->name('profile');
    Route::post('/profile/update', 'ProfileController@update')->name('profile.update');


    Route::get('/portofolio', 'PortofolioController@getPortofolio')->name('portofolio');
    Route::get('/add-portofolio', 'PortofolioController@addPortofolio')->name('portofolio.add');
    Route::post('/add-portofolio', 'PortofolioController@store')->name('portofolio.store');
    Route::get('/portofolio/{id}', 'PortofolioController@edit')->name('portofolio.edit');
    Route::post('/portofolio/update', 'PortofolioController@update')->name('portofolio.update');


    Route::get('/issue', 'IssueController@issue')->name('issue');
    
});

