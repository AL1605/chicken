<?php
class UserTypeController extends Controller{ //สร้าง class UserTypeController ให้สือทอดคุณสมบัติจาก Controller
	
	//การจัดการผู้ใช้งาน			-ส่วนของการแสดงข้อมูลประเภทผู้ใช้
	public function index(){ //สร้าง function index() เป็นแบบ public
		$userType = UserType::all(); //ดึงข้อมูลประเภทผู้ใช้มาจาก UserType::all() และเก็บลงใน $userType
		return View::make('userType', '$userType')->with('userType', $userType); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $userType ไปด้วย
	}
}
?>