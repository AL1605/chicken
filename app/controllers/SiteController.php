<?php
class SiteController extends Controller{ //สร้าง class SiteController ให้สือทอดคุณสมบัติจาก Controller
	
	//สร้างหน้าจอสำหรับระบบเลี้ยงไก่
	public function index(){ //สร้าง function index() เป็นแบบ public
		return View::make('site/index'); //เชื่อมโยงกับ view ด้วยคำสั่ง View::make('site/index')
	}
}
?>