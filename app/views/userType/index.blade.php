@extends('layouts.master') <!--การจัดการผู้ใช้งาน		-ส่วนของการแสดงข้อมูลประเภทผู้ใช้-->		<!--กำหนดให้ใช้งาน layout หลัก-->

@section('content')<!--เริ่มต้นแสดงผลส่วนของ content-->

<h1>User Type</h1>
<hr />
{{ HTML::link('userTypeForm', 'Add User Type', array('class'=>'btn btn-primary')) }} <!--แสดงปุ่มลิงค์ ไปยัง function userType-->
<p />

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($userType as $v) <!--วน loop แสดงข้อมูลของ userType โดยเก็บลงตัวแปร $v แล้วนำไปใช้งาน-->
			<tr>
				<td>{{ $v->name }}</td>
				<td>
					{{ HTML::link('userTypeForm/'.$v->id, 'Edit') }} <!--เป็นการแปะจุดลิงค์ Edit ลงไป และส่งค่า $v->id ไปด้วย-->
					{{ HTML::link('userTypeDelete/'.$v->id, 'Delete') }} <!--เป็นการแปะจุดลิงค์ Delete ลงไป และส่งค่า $v->id ไปด้วย-->
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop