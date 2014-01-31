<?php
class UserTypeController extends Controller{ //สร้าง class UserTypeController ให้สือทอดคุณสมบัติจาก Controller
	
	//การจัดการประเภทผู้ใช้งาน		-ส่วนของการแสดงข้อมูลประเภทผู้ใช้
	public function index(){ //สร้าง function index() เป็นแบบ public
		$userType = UserType::all(); //ดึงข้อมูลประเภทผู้ใช้มาจาก UserType::all() และเก็บลงใน $userType
		return View::make('userType/index')->with('userType', $userType); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $userType ไปด้วย
	}
	
	//การจัดการประเภทผู้ใช้งาน		-ส่วนของการเพิ่มข้อมูลประเภทผู้ใช้
	public function form($id=null){ //สร้าง function form มีการกำหนด $id=null ไว้ก่อน เพื่อใช้ในกรณี edit
		//การจัดการประเภทผู้ใช้งาน		-ส่วนของการแก้ไขข้อมูลประเภทผู้ใช้
		if(empty($id)){ //เป็นการตรวจสอบว่ามีค่า $id เข้ามาหรือไม่ ถ้าไม่มีแสดงว่าเป็นการเพิ่มรายการใหม่ แต่ถ้ามีก็แสดงว่าเป็นการแก้ไขรายการ
			$userType = new UserType; //สร้าง userType ขึ้นมา เพื่อเป็นการสร้างรายการใหม่
		}
		else{
			$userType = UserType::find($id); //ทำการค้นรายการเดิมข้นมา เพ่ือจะแก้ไขข้อมูล
		}
		
		if(Input::all()){ //ตรวจสอบว่ามีการส่งข้อมูลเข้ามา
			$userType->name = Input::get('name'); //เก็บค่า name ลงใน $userType->name
			if($userType->save()){ //สั่งบรรทึกรายการด้วย $userType->save()
				return Redirect::to('userType'); //ให้ redirect ไปยัง userType/index
			}
		}
		return View::make('userType/form')->with('userType', $userType); //ผูการทำงานเข้ากับ view ของ userType/form พร้อมส่งตัวแปร userType ไปด้วย
	}
	
	//การจัดการประเภทผู้ใช้งาน		-ส่วนของการลบข้อมูลประเภทผู้ใช้
	public function delete($id=null){ //สร้าง function delete มีการรับค่า $id เข้ามา
		if(!empty($id)){ //ตรวตสอบว่า $id ต้องไม่ใช่ค่าว่าง
			UserType::destroy($id); //สั่งลบรายการที่ต้องการด้วยคำสั่ง  destroy($id)
			return Redirect::to('userType'); //ทำการ redirect ไปยังหน้า userType/index
		}
	}
}
?>