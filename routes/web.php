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
    return view('index');
});

Auth::routes();

Route::get('/Forbidden','HomeController@forbidden');


// Economie Route
Route::get('/economie','HomeController@economie');

// Tourisme Route
Route::get('/tourisme','HomeController@tourisme');


// Societe Route
Route::get('/societe','HomeController@societe');


// Culture Route
Route::get('/culture','HomeController@culture');


// Gazette Maritime
Route::get('/gazettemaritime','HomeController@gazette_maritime');


Route::get('/home', 'HomeController@index')->name('home');
// Publisher Only Routes
Route::group(['middleware'=>'publisher'],function(){
  Route::get('/PublisherDashboard','PublisherController@index');
});




// Admin Only Routes
Route::group(['middleware'=>'admin'],function(){
  Route::get('/AdminDashboard','AdminController@index');
});
