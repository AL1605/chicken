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

//การจัดการผู้ใช้งาน		-ส่วนของการแสดงข้อมูลประเภทผู้ใช้
Route::get('/userType', 'UserTypeController@index');

//การจัดการผู้ใช้งาน		-ส่วนของการเพิ่มข้อมูลประเภทผู้ใช้
Route::get('/userTypeForm/{id?}', 'UserTypeController@form');