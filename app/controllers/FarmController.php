<?php
class FarmController extends Controller{ //สร้าง class FarmController ให้สือทอดคุณสมบัติจาก Controller
	
	//การจัดการฟาร์ม	-ส่วนของการแสดงข้อมูลฟาร์ม
	public function index(){ //สร้าง function index()
		$farm = Farm::all(); //ดึงข้อมูล farm ทั้งหมดด้วยคำสั่ง  Farm::all() และเก็บลงใน $farm
		return View::make('farm/index')->with('farm', $farm); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $farm ไปด้วย
	}
	
	/*//การจัดการผู้ใช้งาน		-ส่วนของการเพิ่มข้อมูลผู้ใช้
	public function form($id=null){ //สร้าง function form มีการกำหนด $id=null ไว้ก่อน เพื่อใช้ในกรณี edit
		//การจัดการผู้ใช้งาน		-ส่วนของการแก้ไขข้อมูลผู้ใช้
		if(empty($id)){ //เป็นการตรวจสอบว่ามีค่า $id เข้ามาหรือไม่ ถ้าไม่มีแสดงว่าเป็นการเพิ่มรายการใหม่ แต่ถ้ามีก็แสดงว่าเป็นการแก้ไขรายการ
			$user = new User; //สร้าง user ขึ้นมา เพื่อเป็นการสร้างรายการใหม่
		}
		else{
			$user = User::find($id); //ทำการค้นรายการเดิมข้นมา เพ่ือจะแก้ไขข้อมูล
		}
		
		if(Input::all()){ //ตรวจสอบว่ามีการส่งข้อมูลเข้ามา
			$user->user_type_id = Input::get('user_type_id'); //เก็บค่า name ลงใน $user->user_type_ip
			$user->name = Input::get('name'); //เก็บค่า name ลงใน $user->name
			$user->username = Input::get('username'); //เก็บค่า name ลงใน $user->username
			$user->password = Input::get('password'); //เก็บค่า name ลงใน $user->password
			if($user->save()){ //สั่งบรรทึกรายการด้วย $userType->save()
				return Redirect::to('user'); //ให้ redirect ไปยัง user/index
			}
		}
		return View::make('user/form')->with('user', $user); //ผูการทำงานเข้ากับ view ของ user/form พร้อมส่งตัวแปร user ไปด้วย
	}

	//การจัดการผู้ใช้งาน		-ส่วนของการลบข้อมูลผู้ใช้
	public function delete($id=null){ //สร้าง function delete มีการรับค่า $id เข้ามา
		if(!empty($id)){ //ตรวตสอบว่า $id ต้องไม่ใช่ค่าว่าง
			User::destroy($id); //สั่งลบรายการที่ต้องการด้วยคำสั่ง  destroy($id)
			return Redirect::to('user'); //ทำการ redirect ไปยังหน้า user/index
		}
	}*/
}
?>