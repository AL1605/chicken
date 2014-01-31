<?php
class UserController extends Controller{ //สร้าง class UserController ให้สือทอดคุณสมบัติจาก Controller
	
	//การจัดการผู้ใช้งาน		-ส่วนของการแสดงข้อมูลผู้ใช้
	public function index(){ //สร้าง function index()
		$user = User::all(); //ดึงข้อมูล user ทั้งหมดด้วยคำสั่ง  User::all() และเก็บลงใน $user
		return View::make('user/index')->with('user', $user); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $user ไปด้วย
	}
}
?>