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
    return view('welcome');
});

Route::get('/help', function () {
	return view('help');
});

//PATIENTS
Route::get('/patients/show', 'PatientController@show');
Route::get('/patients', 'PatientController@index');
Route::get('/patients/edit', 'PatientController@edit');

//PHYSICIANS
Route::get('/physicians/show', 'PhysicianController@show');
Route::get('/physicians', 'PhysicianController@index');
Route::get('/physicians/edit', 'PhysicianController@edit');

//ROOMS
Route::get('/rooms/show', 'RoomController@show');
Route::get('/rooms', 'RoomController@index');
Route::get('/rooms/edit', 'RoomController@edit');

//ITEMS
Route::get('/items/show', 'ItemController@show');
Route::get('/items', 'ItemController@index');
Route::get('/items/edit', 'ItemController@edit');

//COST CENTRES
Route::get('/cost-centres/show', 'CostCentreController@show');
Route::get('/cost-centres', 'CostCentreController@index');
Route::get('/cost-centres/edit', 'CostCentreController@edit');

//PATIENT BILLS
Route::get('/bills/create', 'PatientBillController@create');
Route::get('/patient-bills/show', 'PatientBillController@show');
Route::get('/patient-bills', 'PatientBillController@index');
Route::get('/patient-bills/edit', 'PatientBillController@edit');

//TRANSACTIONS
Route::get('/transactions/show', 'TransactionController@show');
Route::get('/transactions', 'TransactionController@index');
Route::get('/transactions/edit', 'TransactionController@edit');