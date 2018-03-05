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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
  return redirect('/id');
});

Route::get('/{locale}', 'HomeController@index')->name('home');  

Route::get('/trip/choose', 'PlanController@choose')->name('plan');

Route::get('/trip/custom', 'PlanController@custom')->name('custom');

Route::get('/trip/recommendation', 'PlanController@recommendation')->name('recommendation');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
