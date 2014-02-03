<?php
class ManagerController extends Controller{ //สร้าง class ชื่อ ManagerController โดยสืบทอดมาจาก Controller
	
	//ระบบผู้บริหาร		-การดึงข้อมูลรายการขอซื้อลูกไก่
	public function babyList(){ //สร้าง function ชื่อ babyList
		$babyList = OrderBaby::where('approved', '=', 'wait')->get(); //ดึงข้อมูลการขอซื้อลูกไก่โดยดึงเฉพาะรายการที่ยังไม่ได้อนุมัติ  เก็บลงที่ตัวแปร $babyList
		
		return View::make('manager/babyList')->with('babyList', $babyList); //ส่งตัวแปร $babyList มาแสดงที่หน้าจอรายการขอซื้อลูกไก่
	}
	
	//ระบบผู้บริหาร		-สถานะการอนุมัติรายการขอซื้อลูกไก่
	public function babyApprove($id=null){ //สร้าง function ชื่อ babyApprove โดยกำหนดตัวแปร $id มีค่าเป็น null
		$data = OrderBaby::find($id); //ดึงรายการขอซื้อลูกไก่จาก $id ที่ส่งมาเก็บลงในตัวแปร $data
		
		if(!empty($data)){ //เช็คตัวแปร $data ต้องมีข้อมูลจึงจะไปสู่เงื่อนไขต่อไป
			$data->approved = 'yes'; //เปลี่ยนสถานะเป็น อนุมัติ
			
			if($data->save()){ //บันทึกข้อมูลรายการขอซื้อลูกไก่
				for($i=0;$i<$data->amount;$i++){ //สร้างลูกไก่จากจำนวนที่ขออนุมัติจากรายการที่ขอซื้อลูกไก่
					$chicken = new Chicken;
					
					$chicken->farm_id = $data->farm_id;
					$chicken->code = $chicken->farm_id.substr(uniqid(), 10, 13);
					$chicken->weight = 70;
					$chicken->status = 'baby';
					
					$chicken->save();
				}
			}
			return Redirect::to('babyList'); //เมื่อสร้างลูกไก่จนครบก็จะแสดงหน้าจอ babyList
		}
	}

	//ระบบผู้บริหาร		-สถานะการไม่อนุมัติรายการขอซื้อลูกไก่
	public function babyNoApprove($id=null){ //สร้าง function ชื่อ babyNoApprove โดยกำหนดตัวแปร $id มีค่าเป็น null
		$data = OrderBaby::find($id); //ดึงรายการขอซื้อลูกไก่จาก $id ที่ส่งมาเก็บลงในตัวแปร $data
		
		if(!empty($data)){ //เช็คตัวแปร $data ต้องมีข้อมูลจึงจะไปสู่เงื่อนไขต่อไป
			$data->approved = 'no'; //เปลี่ยนสถานะเป็น ไม่อนุมัติ
			
			if($data->save()){ //ทำการบันทึกรายการ
				return Redirect::to('babyList'); //เมื่อบันทึกรายการให้ไปที่หน้า babyList
			}
		}
	}
}
?>