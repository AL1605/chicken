<?php
class Food extends Eloquent{ //Food สืบทอดจากคุณสมบัติจาก Eloquent
	
	//ระบบจัดซื้ออาหาร
	public $timestamps = FALSE; //กำหนด $timestamps = FALSE (กรณีที่ไม่ใช้ field create_at และ update_at)
}
?>