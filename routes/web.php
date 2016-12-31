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

Route::get('admin/farmer',['as'=>'allFarmer','uses'=>'AdminController@farmer_all']);
Route::get('admin/farmer/add',['as'=>'addFarmer','uses'=>'AdminController@farmer_add']);
Route::post('admin/farmer/save',['as'=>'saveFarmer','uses'=>'AdminController@farmer_save']);
Route::get('admin/farmer/edit/{id}',['as'=>'editFarmer','uses'=>'AdminController@farmer_edit']);
Route::post('admin/farmer/update',['as'=>'updateFarmer','uses'=>'AdminController@farmer_update']);
Route::get('admin/farmer/delete/{id}',['as'=>'deleteFarmer','uses'=>'AdminController@farmer_delete']);