<?php
class OrderController extends Controller{ //สร้าง class UserController ให้สือทอดคุณสมบัติจาก Controller
	
	//ระบบจัดซื้อไก่		-ส่วนของการขอซื้อลูกไก่
	public function orderBaby(){ //สร้าง function orderBaby()
		$orderBaby = OrderBaby::all(); //ดึงข้อมูล OrderBaby ทั้งหมดด้วยคำสั่ง  OrderBaby::all() และเก็บลงใน $orderBady
		
		return View::make('order/orderBaby')->with('orderBaby', $orderBaby); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $orderBady ไปด้วย
	}
	
	//ระบบจัดซื้อไก่		-ส่วนของการสั่งซื้อลูกไก่
	public function orderBabyForm(){ //สร้าง function orderBabyForm
		$orderBaby = new OrderBaby; //สร้าง model รายการขอซื้อลูกไก่ และเก็บที่ตัวแปร $orderBaby
				
		if(Input::all()){ //ตรวจสอบว่ามีการส่งข้อมูลเข้ามา
			$orderBaby->farm_id = Input::get('farm_id'); //เก็บค่า farm_id ที่มาจาก view ลงไปใน field ก่อนจะบันทึก
			$orderBaby->amount = Input::get('amount'); //เก็บค่า amount ที่มาจาก view ลงไปใน field ก่อนจะบันทึก
			$orderBaby->approved = 'wait'; 
			if($orderBaby->save()){ //สั่งบรรทึกรายการด้วย $orderBaby->save()
				return Redirect::to('orderBaby'); //เมื่อบันทึกสำเร็จจะไปที่หน้า orderBaby
			}
		}
		return View::make('order/orderBabyForm'); //เป็นการแสดงผลหน้าจอขอสั่งซื้อลูกไก่
	}
	
	//ระบบจัดซื้ออาหาร		-ส่วนของการขอซื้ออาหาร
	public function orderFood(){ //สร้าง function orderFood()
		$orderFood = Food::all(); //ดึงข้อมูล Food ทั้งหมดด้วยคำสั่ง  food::all() และเก็บลงใน $orderFood
		
		return View::make('order/orderFood')->with('orderFood', $orderFood); //ผูกการทำงานเข้ากับ view พร้อมส่งตัวแปร $orderFood ไปด้วย
	}
	
	//ระบบจัดซื้ออาหาร		-ส่วนของการสั่งซื้ออาหาร
	public function orderFoodForm(){ //สร้าง function orderFoodForm
		$orderFood = new Food; //สร้าง model รายการขอซื้อลูกไก่ และเก็บที่ตัวแปร $orderBaby
				
		if(Input::all()){ //ตรวจสอบว่ามีการส่งข้อมูลเข้ามา
			$orderFood->name = Input::get('name'); //เก็บค่า name ที่มาจาก view ลงไปใน field ก่อนจะบันทึก
			$orderFood->amount = Input::get('amount'); //เก็บค่า amount ที่มาจาก view ลงไปใน field ก่อนจะบันทึก
			$orderFood->approved = 'wait'; 
			if($orderFood->save()){ //สั่งบรรทึกรายการด้วย $orderFood->save()
				return Redirect::to('orderFood'); //เมื่อบันทึกสำเร็จจะไปที่หน้า orderFood
			}
		}
		return View::make('order/orderFoodForm'); //เป็นการแสดงผลหน้าจอขอสั่งซื้อลูกไก่
	}
}
?>