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

Route::get('/seminar', 'EventController@seminar')->name('event.seminar');
Route::get('/workshop', 'EventController@workshop')->name('event.workshop');
Route::get('/competition', 'EventController@competition')->name('event.competition');
Route::post('/event', 'EventController@store')->name('event.store');
Route::post('/event/competition', 'EventController@storeCompetition')->name('event.competition.store');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Admin\HomeController@index')->name('admin.home');
    Route::get('/participants', 'Admin\Participants@index')->name('admin.participants');
});


Auth::routes();
