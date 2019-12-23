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

// Root Route
Route::get('/','ApplicantsController@index')->name('root');


// Custom Routes
Route::get('/applicants/new/{id}','ApplicantsController@create')->name('applicants.create');
Route::get('/applicants/search/{skey?}','ApplicantsController@search')->name('applicants.search');

Route::get('/spouses/{person_id}/list','SpousesController@list')->name('spouses.list');

Route::get('/persons/{person_id}/list','PersonsController@list')->name('persons.list');

Route::get('/emergency_contacts/{person_id}/list','EmergencyContactsController@list')->name('contacts.list');

Route::get('/dependents/{person_id}/list','DependentsController@list')->name('dependents.list');

Route::get('/educations/{person_id}/list','EducationsController@list')->name('educations.list');

Route::get('/work_experiences/{person_id}/list','WorkExperiencesController@list')->name('work.list');

//-- Resource Routes
Route::resource('applicants','ApplicantsController')->except(['create']);
Route::resource('spouses','SpousesController');
Route::resource('emergency_contacts','EmergencyContactsController');
Route::resource('dependents','DependentsController');
Route::resource('colleges','CollegesController');
Route::resource('work_experiences','WorkExperiencesController');
Route::resource('persons','PersonsController');




Route::get('/test','Test@index');
Route::put('/test/update','Test@update');
