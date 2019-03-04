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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/seminar-detail', 'HomeController@seminar')->name('detail.seminar');
Route::get('/workshop-detail', 'HomeController@workshop')->name('detail.workshop');
Route::get('/competition-detail', 'HomeController@competition')->name('detail.competition');

Route::get('/seminar', 'EventController@seminar')->name('event.seminar');
Route::get('/workshop', 'EventController@workshop')->name('event.workshop');
Route::post('/event', 'EventController@store')->name('event.store');
Route::get('/competition', 'CompetitionController@index')->name('competition.index');
Route::post('/competition', 'CompetitionController@store')->name('competition.store');


Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Admin\HomeController@index')->name('admin.home');
    Route::get('/participants', 'Admin\ParticipantsController@index')->name('admin.participants.new');
    Route::get('/participants/seminar', 'Admin\ParticipantsController@seminar')->name('admin.participants.seminar');
    Route::get('/participants/workshop', 'Admin\ParticipantsController@workshop')->name('admin.participants.workshop');
    Route::get('/participants/show/{id}', 'Admin\ParticipantsController@show')->name('admin.participants.show');
    Route::get('/participants/accept/{id}', 'Admin\ParticipantsController@accept')->name('admin.participants.accept');
    Route::get('/participants/{id}/edit', 'Admin\ParticipantsController@edit')->name('admin.participants.edit');;
    Route::post('/participants/{id}', 'Admin\ParticipantsController@destroy')->name('admin.participants.delete');
    Route::patch('/participants/{id}', 'Admin\ParticipantsController@update')->name('admin.participants.update');
    Route::get('/participants/attend/{id}', 'Admin\ParticipantsController@attend')->name('admin.participants.attend');

    //competition
    Route::get('/competition/new', 'Admin\MemberCompetitionController@index')->name('admin.competition.new');
    Route::get('/competition/member', 'Admin\MemberCompetitionController@member')->name('admin.competition.member');
    Route::get('/competition/show/{id}', 'Admin\MemberCompetitionController@show')->name('admin.competition.show');
    Route::get('/competition/accept/{id}', 'Admin\MemberCompetitionController@accept')->name('admin.competition.accept');
    Route::get('/competition/{id}/edit', 'Admin\MemberCompetitionController@edit')->name('admin.competition.edit');;
    Route::delete('/competition/{id}', 'Admin\MemberCompetitionController@destroy')->name('admin.competition.delete');
    Route::patch('/competition/{id}', 'Admin\MemberCompetitionController@update')->name('admin.competition.update');
    Route::get('/competition/attend/{id}', 'Admin\MemberCompetitionController@attend')->name('admin.competition.attend');
});

Auth::routes(['register' => false]);
