<?php
class UserTypeController extends Controller{ //สร้าง class UserTypeController ให้สือทอดคุณสมบัติจาก Controller
	
	//การจัดการผู้ใช้งาน		-ส่วนของการแสดงข้อมูลประเภทผู้ใช้
	public function index(){ //สร้าง function index() เป็นแบบ public
		$userType = UserType::all(); //ดึงข้อมูลประเภทผู้ใช้มาจาก UserType::all() และเก็บลงใน $userType
		return View::make('userType/index')->with('userType', $userType); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $userType ไปด้วย
	}
	
	//การจัดการผู้ใช้งาน		-ส่วนของการเพิ่มข้อมูลประเภทผู้ใช้
	public function form($id=null){ //สร้าง function form มีการกำหนด $id=null ไว้ก่อน เพื่อใช้ในกรณี edit
		$userType = new UserType; //สร้าง userType ขึ้นมา เพื่อเป็นการสร้างรายการใหม่
		
		if(Input::all()){ //ตรวจสอบว่ามีการส่งข้อมูลเข้ามา
			$userType->name = Input::get('name'); //เก็บค่า name ลงใน $userType->name
			if($userType->save()){ //สั่งบรรทึกรายการด้วย $userType->save()
				return Redirect::to('userType'); //ให้ redirect ไปยัง userType/index
			}
		}
		return View::make('userType/form')->with('userType', $userType); //ผูการทำงานเข้ากับ view ของ userType/form พร้อมส่งตัวแปร userType ไปด้วย
	}
}
?>