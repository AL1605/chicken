@extends('layouts.master') <!--ระบบผู้บริหาร		-ส่วนของการขอซื้ออาหาร-->		<!--เป็นการเรียกใช้ template-->

@section('content')<!--เริ่มต้นแสดงผลส่วนของ content-->

<h1>Request Food</h1>
<hr />

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Name</th>
			<th>Amount</th>
			<th>Approve</th>
		</tr>
	</thead>
	<tbody>
		@foreach($foodList as $v) <!--วน loop แสดงข้อมูลรายการขอซื้ออาหารโดยเก็บลงตัวแปร $v-->
			<tr>
				<td>{{ $v->name }}</td> <!--ชื่อ-->
				<td>{{ $v->amount }}</td> <!--จำนวนที่ขอซื้อ-->
				<td>
					{{ HTML::link('foodApprove/'.$v->id, 'YES') }} <!--เป็นการแปะจุดลิงค์ YES ลงไป และส่งค่า $v->id --> 
					| 
					{{ HTML::link('foodNoApprove/'.$v->id, 'NO') }} <!--เป็นการแปะจุดลิงค์ NO ลงไป และส่งค่า $v->id -->
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop