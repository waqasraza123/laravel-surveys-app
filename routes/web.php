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
Route::get('/clear_cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    return "Cache Cleared!";
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/register/verify/{code}', 'Auth\verifyController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/thank-you', 'HomeController@thankYou')->name('thankYou');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile', 'ProfileController@update')->name('profileUpdate');
Route::post('/profile/updatePassword', 'ProfileController@updatePassword')->name('updatePassword');

//////////////////////////////////////////////////////////////
///////////////////////// For Firm //////////////////////////
//////////////////////////////////////////////////////////////

Route::get('/advisors/new', 'viewAdvisorsController@new')->name('advisors_new');
Route::get('/advisors/approved', 'viewAdvisorsController@approved')->name('advisors_approved');
Route::get('/advisors/approve/{id}', 'viewAdvisorsController@approve');
Route::get('/advisors/delete/{id}', 'viewAdvisorsController@delete');

Route::get('/tokens/purchase', 'TokensController@index');
Route::post('/tokens/purchase', 'TokensController@purchase');
Route::get('/tokens/history', 'TokensController@history');
Route::get('/tokens/usage', 'TokensController@usage');

//////////////////////////////////////////////////////////////
//////////////////////// For Advisor /////////////////////////
//////////////////////////////////////////////////////////////

Route::get('/reports/new', 'ReportsController@new');
Route::post('/reports/new', 'ReportsController@create');
Route::get('/reports/view', 'ReportsController@view');
Route::get('/reports/view/{code}', 'ReportsController@show');
Route::get('/clients', 'ReportsController@clients');
Route::get('/1122', 'ReportsController@viewReport');


//////////////////////////////////////////////////////////////
///////////////////////// For Admin //////////////////////////
//////////////////////////////////////////////////////////////

Route::get('/rates', 'TokenRatesController@index');
Route::post('/rates/new', 'TokenRatesController@new');
Route::post('/rates/clear', 'TokenRatesController@clear');

//////////////////////////////////////////////////////////////
///////////////////////// For Client /////////////////////////
//////////////////////////////////////////////////////////////

Route::get('/questioner/{code}', 'QuestionerController@index');
Route::get('/questioner/{code}/part/1', 'QuestionerController@part1');
Route::post('/questioner/{code}/part/1', 'QuestionerController@part1_submit');
Route::get('/questioner/{code}/part/2', 'QuestionerController@part2');
Route::post('/questioner/{code}/part/2', 'QuestionerController@part2_submit');
Route::get('/questioner/{code}/part/3', 'QuestionerController@part3');
Route::post('/questioner/{code}/part/3', 'QuestionerController@part3_submit');
Route::get('/questioner/{code}/part/4', 'QuestionerController@part4');
Route::post('/questioner/{code}/submit', 'QuestionerController@part4_submit');

Route::get('/test', function () {

});
