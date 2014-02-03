@extends('layouts.master') <!--ระบบผู้บริหาร		-ส่วนของการขอซื้อลูกไก่-->		<!--เป็นการเรียกใช้ template-->

@section('content')<!--เริ่มต้นแสดงผลส่วนของ content-->

<h1>Request Baby</h1>
<hr />

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Farm</th>
			<th>Amount</th>
			<th>Approve</th>
		</tr>
	</thead>
	<tbody>
		@foreach($babyList as $v) <!--วน loop แสดงข้อมูลรายการขอซื้อลูกไก่ โดยเก็บลงตัวแปร $v-->
			<tr>
				<td>{{ $v->farm->name }}</td> <!--ชื่อฟาร์ม-->
				<td>{{ $v->amount }}</td> <!--จำนวนที่ขอซื้อ-->
				<td>
					{{ HTML::link('babyApprove/'.$v->id, 'YES') }} <!--เป็นการแปะจุดลิงค์ YES ลงไป และส่งค่า $v->id กรณีที่มีการอนุมัติ จะสร้างลูกไก่ตามจำนวนที่สั่งซื้อ--> 
					| 
					{{ HTML::link('babyNoApprove/'.$v->id, 'NO') }} <!--เป็นการแปะจุดลิงค์ NO ลงไป และส่งค่า $v->id -->
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop