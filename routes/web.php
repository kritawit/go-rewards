<?php

Route::get('/', 'AdminController@index');

Route::get('reward', 'RewardController@index');
Route::post('reward', 'RewardController@reward');
Route::post('reward/savelucky', 'RewardController@savelucky');

Route::get('admin/employee', 'AdminController@employee');
Route::get('admin/employee/import', 'AdminController@importFormEmployee');
Route::post('admin/employee/import', 'AdminController@importEmployee');
Route::get('admin/employee/add','AdminController@employeeForm');
Route::get('admin/employee/edit/{id}', 'AdminController@editEmployee');
Route::post('admin/employee/add', 'AdminController@addEmployee');


Route::get('admin/branch', 'AdminController@branch');

Route::get('admin/award', 'AdminController@award');

Route::get('admin/luckylist', 'AdminController@luckylist');

Route::get('admin/planning', 'AdminController@planning');