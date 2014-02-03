@extends('layouts.master') <!--ระบบการจัดซื้อไก่		-ส่วนของการขอซื้อลูกไก่-->		<!--เป็นการเรียกใช้ template-->

@section('content')<!--เริ่มต้นแสดงผลส่วนของ content-->

<h1>Order Baby</h1>
<hr />
{{ HTML::link('orderBabyForm', 'Add Order Baby', array('class'=>'btn btn-primary')) }} <!--ปุ่ม Add Order Baby ลิงค์ ไปยัง orderBabyForm-->
<p />

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Farm</th>
			<th>Amount</th>
			<th>Approve</th>
		</tr>
	</thead>
	<tbody>
		@foreach($orderBaby as $v) <!--วน loop แสดงข้อมูลของการซื้อลูกไก่ โดยเก็บลงตัวแปร $v-->
			<tr>
				<td>{{ $v->farm->name }}</td> <!--ชื่อฟาร์ม-->
				<td>{{ $v->amount }}</td> <!--จำนวนที่ขอซื้อ-->
				<td>{{ $v->approved }}</td> <!--สถานะการอนุมัติ-->
			</tr>
		@endforeach
	</tbody>
</table>

@stop