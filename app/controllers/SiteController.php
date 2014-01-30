<?php
class SiteController extends BaseController{ //สร้าง class SiteController ให้สือทอดคุณสมบัติจาก Controller
	
	public function index(){ //สร้าง function index() เป็นแบบ public
		return View::make('site/index'); //เชื่อมโยงกับ view ด้วยคำสั่ง View::make('site/index')
	}
}
?>