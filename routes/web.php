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

Route::get('/','jobController@welcome');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/{id}', 'UserController@login');
Route::resource('user', 'UserController');
Route::post('complete_profile','UserController@complete_profile');
Route::post('provider_profile','jobController@provider_profile');
Route::resource('provider','jobController');
Route::post('post_jobs/{id}','jobController@post_jobs');
Route::get('posted_jobs','UserController@posted_jobs');
Route::get('full_job_details_users/{id}','UserController@full_job_details_users');
Route::get('apply/{id}','UserController@apply');
Route::get('applied_users/{id}','jobController@applied_users');
Route::post('form_data/{id}','UserController@form_data');
Route::get('add_jobs','jobController@add_jobs');
Route::get('new_user_login','UserController@new_user_login');
Route::get('full_job_details_employers/{id}','jobController@full_job_details_employers')->name('full_job_details_employers');
Route::post('message/{id}','jobController@message');
Route::get('employers','AdminController@employers');
Route::resource('admin','AdminController');
Route::get('users','AdminController@users');
Route::get('users_info/{id}','AdminController@users_info')->name('users_info');
Route::get('users_applied_jobs/{id}','AdminController@users_applied_jobs');
Route::get('users_full_job_details/{id}','AdminController@users_full_job_details');
Route::get('jobs_edit/{id}','AdminController@jobs_edit');
Route::post('jobs_update/{id}','AdminController@jobs_update');
Route::post('delete_job/{id}','AdminController@delete_job');




