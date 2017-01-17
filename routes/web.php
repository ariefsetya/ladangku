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
    return view('homepage');
});
Route::group(['middleware' => 'auth'], function () {
	//master data for admin
	Route::get('admin/dashboard',['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
	Route::get('farmer/dashboard',['as'=>'farmer.dashboard','uses'=>'FarmerController@dashboard']);
	Route::resource('admin/farmer','FarmerController');
	Route::resource('admin/admin','AdminController');
	Route::resource('admin/user','UserController',['only'=>['index','update','destroy']]);
	Route::resource('admin/material','MaterialController');
	Route::resource('admin/product','ProductController');
	Route::resource('admin/unitconv','UnitConvController');

	//harvest
	Route::get('harvest/my-product',['as'=>'harvest.my-product','uses'=>'HarvestController@myproduct']);
	Route::get('harvest/start-plant',['as'=>'harvest.start-plant','uses'=>'HarvestController@startplant']);
	Route::post('harvest/next-start-plant',['as'=>'harvest.next-start-plant','uses'=>'HarvestController@nextstartplant']);
	Route::get('harvest/select-material/{id}',['as'=>'harvest.select-material','uses'=>'HarvestController@selectmaterial']);
	Route::post('harvest/next-select-material/{id}',['as'=>'harvest.next-select-material','uses'=>'HarvestController@nextselectmaterial']);
	Route::get('harvest/review-plant/{id}',['as'=>'harvest.review-plant','uses'=>'HarvestController@reviewplant']);
	Route::post('harvest/next-review-plant/{id}',['as'=>'harvest.next-review-plant','uses'=>'HarvestController@nextreviewplant']);
	Route::get('harvest/harvest',['as'=>'harvest.harvest','uses'=>'HarvestController@harvest']);
	Route::get('harvest/harvest/{id}',['as'=>'harvest.start-harvest','uses'=>'HarvestController@startharvest']);
	Route::get('harvest/cancel/{id}',['as'=>'harvest.cancel-plant','uses'=>'HarvestController@cancelplant']);
	Route::post('harvest/submit-harvest/{id}',['as'=>'harvest.submit-harvest','uses'=>'HarvestController@submitharvest']);
	Route::get('harvest/sell-harvest/',['as'=>'harvest.sell-harvest','uses'=>'HarvestController@sellharvest']);
	Route::get('harvest/sell-harvest/{id}',['as'=>'harvest.sell-harvest-id','uses'=>'HarvestController@sellharvestid']);
	Route::post('harvest/next-sell-harvest/{id}',['as'=>'harvest.next-sell-harvest-id','uses'=>'HarvestController@nextsellharvestid']);
	Route::get('harvest/stock-harvest/',['as'=>'harvest.stock-harvest','uses'=>'HarvestController@stockharvest']);
	Route::get('harvest/income/',['as'=>'harvest.income','uses'=>'HarvestController@income']);

});
Auth::routes();

Route::get('logout',['as'=>'logout','uses'=>'Auth\\LoginController@logout']);

Route::get('store',['as'=>'guest.store','uses'=>'HomeController@store']);
Route::get('farmer/{id}',['as'=>'guest.farmer','uses'=>'HomeController@farmer']);

Route::get('/home', 'HomeController@index');
