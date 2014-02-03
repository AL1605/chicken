@extends('layouts.master') <!--การจัดการฟาร์ม		-ส่วนของการแสดงข้อมูลฟาร์ม-->		<!--กำหนดให้ใช้งาน layout หลัก-->

@section('content')<!--เริ่มต้นแสดงผลส่วนของ content-->

<h1>Farm</h1>
<hr />
{{ HTML::link('farmForm', 'Add Farm', array('class'=>'btn btn-primary')) }} <!--ปุ่ม Add Farm ลิงค์ ไปยัง userForm-->
<p />

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($farm as $v) <!--วน loop แสดงข้อมูลของ farm โดยเก็บลงตัวแปร $v แล้วนำไปใช้งาน-->
			<tr>
				<td>{{ $v->name }}</td>
				<td>
					{{ HTML::link('farmForm/'.$v->id, 'Edit') }} <!--เป็นการแปะจุดลิงค์ Edit ลงไป และส่งค่า $v->id ไปด้วย--> 
					| 
					{{ HTML::link('farmDelete/'.$v->id, 'Delete') }} <!--เป็นการแปะจุดลิงค์ Delete ลงไป และส่งค่า $v->id ไปด้วย-->
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop