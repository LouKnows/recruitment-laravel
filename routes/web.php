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

// Root route
Route::get('/','ApplicantsController@index')->name('root');


// custom routes
Route::get('/applicants/new/{id}','ApplicantsController@create')->name('applicants.create');
Route::post('/applicants','ApplicantsController@store')->name('applicants.store');


// resource routes
Route::resource('spouses','SpousesController');
Route::resource('emergency_contacts','EmergencyContactsController');
Route::resource('dependents','DependentsController');
Route::resource('colleges','CollegesController');
Route::resource('work_experiences','WorkExperiencesController');
Route::resource('persons','PersonsController');