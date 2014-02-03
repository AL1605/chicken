<?php
class OrderBaby extends Eloquent{ //OrderBaby สืบทอดจากคุณสมบัติจาก Eloquent
	
	//ระบบจัดซื้อ
	public $timestamps = FALSE; //กำหนด $timestamps = FALSE (กรณีที่ไม่ใช้ field create_at และ update_at)
	
	public function farm(){ //สร้างชื่อ function สำหรับเรียกใช้ความสัมพันธ์ไปยัง model farm
		return $this->belongsTo('Farm'); //กำหนดความสัมพันธ์แบบ belongs to ไปยัง model farm
	}
}
?>