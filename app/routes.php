<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//สร้างหน้าจอสำหรับระบบเลี้ยงไก่
Route::get('/', 'SiteController@index'); //คือการกำหนด url ให้กับ SiteController@index เป็นชื่อ  /home


//การจัดการประเภทผู้ใช้งาน		-ส่วนของการแสดงข้อมูลประเภทผู้ใช้
Route::get('/userType', 'UserTypeController@index');
//การจัดการประเภทผู้ใช้งาน		-ส่วนของการเพิ่มข้อมูลประเภทผู้ใช้
Route::any('/userTypeForm/{id?}', 'UserTypeController@form');
//การจัดการประเภทผู้ใช้งาน		-ส่วนของการลบข้อมูลประเภทผู้ใช้
Route::get('/userTypeDelete/{id}', 'UserTypeController@delete');


//การจัดการผู้ใช้งาน		-ส่วนของการแสดงข้อมูลผู้ใช้
Route::get('/user', 'UserController@index');
//การจัดการผู้ใช้งาน		-ส่วนของการเพิ่มข้อมูลผู้ใช้
Route::any('/userForm/{id?}', 'UserController@form');
//การจัดการผู้ใช้งาน		-ส่วนของการลบข้อมูลผู้ใช้
Route::get('/userDelete/{id}', 'UserController@delete');


//การจัดการฟาร์ม		-ส่วนของการแสดงข้อมูลฟาร์ม
Route::get('/farm', 'FarmController@index');
//การจัดการฟาร์ม		-ส่วนของการเพิ่มข้อมูลฟาร์ม
Route::any('/farmForm/{id?}', 'FarmController@form');
//การจัดการฟาร์ม		-ส่วนของการลบข้อมูลฟาร์ม
Route::get('/farmDelete/{id}', 'FarmController@delete');


//ระบบจัดซื้อไก่		-ส่วนของการขอซื้อลูกไก่
Route::get('/orderBaby', 'OrderController@orderBaby');
//ระบบจัดซื้อไก่		-ส่วนของการสั่งซื้อลูกไก่
Route::any('/orderBabyForm', 'OrderController@orderBabyForm');


//ระบบจัดซื้ออาหาร		-ส่วนของการขอซื้ออาหาร
Route::get('/orderFood', 'OrderController@orderFood');
//ระบบจัดซื้ออาหาร		-ส่วนของการสั่งซื้ออาหาร
Route::any('/orderFoodForm', 'OrderController@orderFoodForm');


//ระบบผู้บริหาร		-ส่วนของการขอซื้อลูกไก่
Route::get('/babyList', 'ManagerController@babyList');
Route::get('/babyApprove/{id}', 'ManagerController@babyApprove');
Route::get('/babyNoApprove/{id}', 'ManagerController@babyNoApprove');


//ระบบผู้บริหาร		-ส่วนของการขอซื้ออาหาร
Route::get('/foodList', 'ManagerController@foodList');
Route::get('/foodApprove/{id}', 'ManagerController@foodApprove');
Route::get('/foodNoApprove/{id}', 'ManagerController@foodNoApprove');


//ระบบเลี้ยงไก่		-ให้อาหารไก่
Route::any('/feedList', 'ChickenController@feedList');
