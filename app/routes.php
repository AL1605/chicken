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