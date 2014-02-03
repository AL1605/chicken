<?php
class FarmController extends Controller{ //สร้าง class FarmController ให้สือทอดคุณสมบัติจาก Controller
	
	//การจัดการฟาร์ม	-ส่วนของการแสดงข้อมูลฟาร์ม
	public function index(){ //สร้าง function index()
		$farm = Farm::all(); //ดึงข้อมูล farm ทั้งหมดด้วยคำสั่ง  Farm::all() และเก็บลงใน $farm
		return View::make('farm/index')->with('farm', $farm); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $farm ไปด้วย
	}
	
	//การจัดการฟาร์ม	-ส่วนของการเพิ่มข้อมูลฟาร์ม
	public function form($id=null){ //สร้าง function form มีการกำหนด $id=null ไว้ก่อน เพื่อใช้ในกรณี edit
		//การจัดการผู้ใช้งาน		-ส่วนของการแก้ไขข้อมูลผู้ใช้
		if(empty($id)){ //เป็นการตรวจสอบว่ามีค่า $id เข้ามาหรือไม่ ถ้าไม่มีแสดงว่าเป็นการเพิ่มรายการใหม่ แต่ถ้ามีก็แสดงว่าเป็นการแก้ไขรายการ
			$farm = new Farm; //สร้าง farm ขึ้นมา เพื่อเป็นการสร้างรายการใหม่
		}
		else{
			$farm = Farm::find($id); //ทำการค้นรายการเดิมข้นมา เพื่อจะแก้ไขข้อมูล
		}
		
		if(Input::all()){ //ตรวจสอบว่ามีการส่งข้อมูลเข้ามา
			$farm->name = Input::get('name'); //เก็บค่า name ลงใน $farm->name
			if($farm->save()){ //สั่งบรรทึกรายการด้วย $farm->save()
				return Redirect::to('farm'); //ให้ redirect ไปยัง farm/index
			}
		}
		return View::make('farm/form')->with('farm', $farm); //ผูการทำงานเข้ากับ view ของ farm/form พร้อมส่งตัวแปร farm ไปด้วย
	}

	//การจัดการผู้ใช้งาน		-ส่วนของการลบข้อมูลผู้ใช้
	public function delete($id=null){ //สร้าง function delete มีการรับค่า $id เข้ามา
		if(!empty($id)){ //ตรวตสอบว่า $id ต้องไม่ใช่ค่าว่าง
			Farm::destroy($id); //สั่งลบรายการที่ต้องการด้วยคำสั่ง  destroy($id)
			return Redirect::to('farm'); //ทำการ redirect ไปยังหน้า farm/index
		}
	}
}
?>