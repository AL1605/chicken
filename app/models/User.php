<?php
class User extends Eloquent{ //User สืบทอดจากคุณสมบัติจาก Eloquent
	
	//การจัดการผู้ใช้งาน
	public $timestamps = FALSE; //กำหนด $timestamps = FALSE
	
	public function userType(){ //สร้างการเชื่อมโยงไปยัง userType
		return $this->belongsTo('UserType'); //กำหนดการเชื่อมโยงเป็นแบบ belongsTo
	}
}
?>