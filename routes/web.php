<?php

use Illuminate\Support\Facades\Route;

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



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('clear', function() {
    $exitCode1 = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:cache');
    $exitCode3 = Artisan::call('view:clear');
    $exitCode4 = Artisan::call('route:clear');
    $exitCode2 = Artisan::call('config:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/service', 'FrontendController@service');
Route::get('/contact', 'FrontendController@contact');
//Route::get('/admin', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//about
Route::get('/createAboutUs', 'HomeController@createAboutUs');
Route::post('/createAboutUs', 'HomeController@postCreateAboutUs');
Route::get('/editAboutUs/{id}', 'HomeController@editAboutUs');
Route::put('/updateAboutUs/{id}', 'HomeController@updateAboutUs')->name('updateAboutUs');
//mission
Route::get('/mission', 'HomeController@mission');
Route::post('/mission', 'HomeController@postMission');
Route::get('/editMission/{id}', 'HomeController@editMission');
Route::put('/updateMission/{id}', 'HomeController@updateMission')->name('updateMission');

//vission
/*Route::get('/vission', 'HomeController@vission');
Route::post('/vission', 'HomeController@postVission');
Route::get('/editVission/{id}', 'HomeController@editVission');
Route::put('/updateVission/{id}', 'HomeController@updateVission')->name('updateVission');*/

// contact 
Route::get('/createContact', 'HomeController@createContact');
Route::post('/createContact', 'HomeController@postCreateContact');
Route::get('/editContact/{id}', 'HomeController@editContact');
Route::put('/updateContact/{id}', 'HomeController@updateContact')->name('updateContact');

// testimonial
Route::get('/testimonial', 'HomeController@testimonial');
Route::post('/testimonial', 'HomeController@postTestimonial');
Route::get('/viewTestimonial', 'HomeController@viewTestimonial');
Route::get('/editTestimonial/{id}', 'HomeController@editTestimonial');
Route::put('/updateTestimonial/{id}', 'HomeController@updateTestimonial')->name('updateTestimonial');

// contactmail

Route::post('/contactmail', 'FrontendController@contactmail');

//post

Route::get('/posting', 'HomeController@posting');
Route::post('/posting', 'HomeController@postPosting');
Route::get('/editPosting/{id}', 'HomeController@editPosting');
Route::put('/updatePosting/{id}', 'HomeController@updatePosting')->name('updatePosting');
Route::get('/activatePosting/{id}', 'HomeController@activatePosting');
Route::get('/deactivatePosting/{id}', 'HomeController@deactivatePosting');