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
    return view('home');
});
Route::get('/economie', function () {
  return view('economie');
});
Route::get('/tourisme', function () {
  return view('tourisme');
});
Route::get('/societe', function () {
  return view('societe');
});
Route::get('/culture', function () {
  return view('culture');
});
Route::get('/gazettemaritime', function () {
  return view('gazettemaritime');
});



Auth::routes();

Route::get('/Forbidden','HomeController@forbidden');

// Economie Route
Route::get('/economie','HomeController@economie')->name('economie');

// Tourisme Route
Route::get('/tourisme','HomeController@tourisme')->name('tourisme');


// Societe Route
Route::get('/societe','HomeController@societe')->name('societe');


// Culture Route
Route::get('/culture','HomeController@culture')->name('culture');


// Gazette Maritime
Route::get('/gazettemaritime','HomeController@gazette_maritime')->name('gazettemaritime');


Route::get('/', 'HomeController@index')->name('home');


// Publisher Only Routes
Route::group(['middleware'=>'publisher'],function(){
  Route::get('/PublisherDashboard','PublisherController@index');
  Route::get('/publisher/publishers','PublisherController@publishers');
  Route::get('/publisher/statistics','PublisherController@statistics');
  Route::get('/publisher/articles','PublisherController@articles');
  Route::get('/publisher/addarticle','PublisherController@addarticle');
  Route::post('/publisher/postarticle','PublisherController@postarticle');
  Route::delete('/publisher/deletearticle','PublisherController@deletearticle');
});




// Admin Only Routes
Route::group(['middleware'=>'admin'],function(){
  Route::get('/AdminDashboard','AdminController@index');
  Route::get('/admin/users','AdminController@users');
  Route::get('/admin/articles','AdminController@articles');
  Route::get('/admin/statistics','AdminController@statistics');
  Route::post('/admin/modifyuser','AdminController@modifyuser');
  Route::delete('/admin/deleteuser','AdminController@deleteuser');
  Route::delete('/admin/deletearticle','AdminController@deletearticle');
});
