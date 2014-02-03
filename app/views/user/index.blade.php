@extends('layouts.master') <!--การจัดการผู้ใช้งาน		-ส่วนของการแสดงข้อมูลผู้ใช้-->		<!--กำหนดให้ใช้งาน layout หลัก-->

@section('content')<!--เริ่มต้นแสดงผลส่วนของ content-->

<h1>User</h1>
<hr />
{{ HTML::link('userForm', 'Add User', array('class'=>'btn btn-primary')) }} <!--ปุ่ม Add User ลิงค์ ไปยัง userForm-->
<p />

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Type</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $v) <!--วน loop แสดงข้อมูลของ user โดยเก็บลงตัวแปร $v แล้วนำไปใช้งาน-->
			<tr>
				<td>{{ $v->userType->name }}</td>
				<td>{{ $v->name }}</td>
				<td>
					{{ HTML::link('userForm/'.$v->id, 'Edit') }} <!--เป็นการแปะจุดลิงค์ Edit ลงไป และส่งค่า $v->id ไปด้วย--> 
					| 
					{{ HTML::link('userDelete/'.$v->id, 'Delete') }} <!--เป็นการแปะจุดลิงค์ Delete ลงไป และส่งค่า $v->id ไปด้วย-->
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop