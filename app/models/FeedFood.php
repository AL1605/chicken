<?php
class FeedFood extends Eloquent{ //FeedFood สืบทอดจากคุณสมบัติจาก Eloquent
	
	//ระบบเลี้ยงไก่
	public $timestamps = FALSE; //กำหนด $timestamps = FALSE
	
	public function chicken(){ //สร้าง function สำหรับเรียกใช้ความสัมพันธ์ไปยัง model chicken
		return $this->belongsTo('Chicken'); //กำหนดการเชื่อมโยงเป็นแบบ belongsTo
	}
}
?>