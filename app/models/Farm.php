<?php
class Farm extends Eloquent{ //User สืบทอดจากคุณสมบัติจาก Eloquent
	
	//การจัดการฟาร์ม
	public $timestamps = FALSE; //กำหนด $timestamps = FALSE (กรณีที่ไม่ใช้ field create_at และ update_at)
}
?>