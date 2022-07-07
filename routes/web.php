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

Route::get('/', 'DemoController@index');

Route::get('demo','DemoController@demo');

Route::get('demo2','DemoController@demo2');

Route::get('test', 'DemoController@test');

Route::get('employees', 'EmployeeController@employees');

Route::get('addEmployee', 'EmployeeController@addEmployee');

Route::post('submitEmployee', 'EmployeeController@submitEmployee');

//API routes
Route::get('getEmployees', 'EmployeeController@getEmployees');

Route::get('testQuery', 'EmployeeController@testQuery');
//////
