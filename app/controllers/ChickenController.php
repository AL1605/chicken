<?php
class ChickenController extends Controller{ //สร้าง class ChickenController ให้สือทอดคุณสมบัติจาก Controller
	
	//ระบบเลี้ยงไก่		-ให้อาหารไก่
	public function feedList(){ //สร้าง function feedList()
		$for_kill = Config::get('chicken_settings.weight_for_kill'); //เรียกค่าน้ำหนักจาก config/chicken_setting.weight_for_killเป็นค่าน้ำหนักที่พร้อมเชือดลงตัวแปร $for_kill
		
		if(Input::has('farm_id')){ //ถ้า input ที่ส่งมาเป็น farm_id จะเข้าเงื่อนไข
			$farm_id = Input::get('farm_id');						// *กรณีที่เลือกฟาร์มแล้วกดแสดงรายการ
			$chicken = Chicken::where('farm_id', '=', $farm_id) 	// **รายการไก่ที่เป็นสถานะ ลูกไก่ หรือ ไก่โต
				->whereIn('status', array('baby', 'big'))			// ***และน้ำหนักยังไม่ได้ตามเกณฑ์เชือด
				->where('weight', '<=', $for_kill)					// ****ก็จะแสดงรายการขึ้นมา
				->paginate(10);
		}
		else{															// *กรณีไม่ได้เลือกฟาร์ม 
			$farm_id = null;											// **ก็จะดึงรายการไก่ออกมาทั้งหมด
			$chicken = Chicken::whereIn('status', array('baby', 'big'))	// ***โดยไม่แยกฟาร์ม
				->where('weight', '<=', $for_kill)
				->paginate(10);
		}
		
		return View::make('chicken/feedList') //แสดงหน้าจอรายการไก่ที่เราจะให้อาหาร
			->with('chicken', $chicken)
			->with('farm_id', $farm_id);
	}
}
?>