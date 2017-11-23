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
Route::get('/logout', function () {
    return redirect('http://www.investordna.com.au/');
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
Route::get('/advisors/delete/{id}', 'viewAdvisorsController@delete');
Route::get('/advisors/firm-approve/{id}', 'viewAdvisorsController@firmApprove');
Route::get('/advisers/{id}/edit', 'viewAdvisorsController@editAdviser')->name('adviser-edit');
Route::post('/advisers/{id}/', 'viewAdvisorsController@updateAdviser')->name('adviser-update');
Route::post('/advisers/{id}/password', 'viewAdvisorsController@updateAdviserPassword')->name('adviser-password-update');
Route::post('/firm/code/validate', 'viewAdvisorsController@validatePracticeCode')->name('practice-code');
Route::post('admin/firms/{id}/password-update', 'FirmController@passwordUpdate')->name('admin.firms.pass-update');


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
Route::get('/advisors/approve/{id}', 'viewAdvisorsController@approve');
Route::post('/admin/firms/{id}', 'FirmController@update')->name('firm.update');
Route::resource('/admin/firms', 'FirmController');
Route::get('admin/firms/delete/{id}', 'FirmController@destroy');

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
Route::post('/questioner/{code}/part/4', 'QuestionerController@part4_submit');
Route::get('/questioner/{code}/part/5', 'QuestionerController@part5');
Route::post('/questioner/{code}/part/5', 'QuestionerController@part5_submit');
Route::get('/questioner/{code}/part/6', 'QuestionerController@part6');
Route::post('/questioner/{code}/part/6', 'QuestionerController@part6_submit');
Route::get('/questioner/{code}/part/7', 'QuestionerController@part7');
Route::post('/questioner/{code}/submit', 'QuestionerController@part7_submit');

Route::get('/test', function () {
});
