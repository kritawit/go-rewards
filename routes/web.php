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
//     return view('home');
// });

Route::get('/', 'AdminController@index');

Route::get('reward', 'RewardController@index');
Route::post('reward','RewardController@reward');


Route::get('admin/employee', 'AdminController@employee');
Route::get('admin/employee/import', 'AdminController@importFormEmployee');
Route::post('admin/employee/import', 'AdminController@importEmployee');


Route::get('admin/branch', 'AdminController@branch');

Route::get('admin/award', 'AdminController@award');

Route::get('admin/luckylist', 'AdminController@luckylist');

Route::get('admin/planning', 'AdminController@planning');