@extends('layouts.master') <!--ระบบการจัดซื้ออาหาร		-ส่วนของการขอซื้ออาหาร-->		<!--เป็นการเรียกใช้ template-->

@section('content')<!--เริ่มต้นแสดงผลส่วนของ content-->

<h1>Order Food</h1>
<hr />
{{ HTML::link('orderFoodForm', 'Add Order Food', array('class'=>'btn btn-primary')) }} <!--ปุ่ม Add Order Food ลิงค์ ไปยัง orderFoodForm-->
<p />

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Name</th>
			<th>Amount</th>
			<th>Approve</th>
		</tr>
	</thead>
	<tbody>
		@foreach($orderFood as $v) <!--วน loop แสดงข้อมูลของการซื้ออาหาร โดยเก็บลงตัวแปร $v-->
			<tr>
				<td>{{ $v->name }}</td> <!--ชื่ออาหาร-->
				<td>{{ $v->amount }}</td> <!--จำนวนที่ขอซื้อ-->
				<td>{{ $v->approved }}</td> <!--สถานะการอนุมัติ-->
			</tr>
		@endforeach
	</tbody>
</table>

@stop