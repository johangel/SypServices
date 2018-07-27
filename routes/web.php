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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization, Content-Type' );
Route::get('/', function () {
   if(Auth::check()){return view('home');}else{return view('./auth/login');}
});

Route::get('/packages/register', 'PackageController@PackageCreateView');
Route::get('/packages/details', 'PackageController@PackageDetailsCreateView');
Route::get('/administration', 'OrderController@goToAdministratioView');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/createOrder', 'OrderController@creatOrder');
Route::post('/searchOrder', 'OrderController@searchOrder');
Route::post('/searchOrderById', 'OrderController@searchOrderById');
