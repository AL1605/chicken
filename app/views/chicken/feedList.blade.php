@extends('layouts.master')<!--ระบบเลี้ยงไก่		-ให้อาหารไก่-->	<!--เรียกใช้ template-->

@section('content') <!--กำหนดให้เริ่มแสดงผล content-->

<h1>Chicken For Feed</h1>
<hr/>

{{ Form::open(array('class'=>'form-horizontal')) }} <!--เริ่มต้นการทำงานของ form-->

	<div class="control-group">
		<label for="farm_id" class="control-label">Farm</label>
		<div class="controls">
			{{ Form::select('farm_id', Farm::lists('name', 'id'), $farm_id) }} <!--select box ข้อมูลฟาร์ม-->
			{{ Form::submit('Search', array('class'=>'btn btn-success')) }} <!--Submit ปุ่ม Search-->
		</div>
	</div>
	
{{ Form::close() }} <!--จบการทำงานของ form-->

<table class="table table-bordered table-chicken">
	<thead>
		<tr>
			<th>Code</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($chicken as $v)
			<tr>
				<td>{{ $v->code }}</td> <!--รหัสไก่-->
				<td>{{ $v->status }}</td> <!--สถานะการเติบโตของไก่-->
				<td>
					{{ HTML::link('feedForm/'.$v->id, 'Feed') }} <!--ปุ่ม link สำหรับกดให้อาหาร-->
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

{{ $chicken->appends(array('farm_id' => $farm_id))->links() }} <!--เป็นส่วนของ pagination โดยมีการเก็บ farm_id เมื่อมีการเปลี่ยนหน้า เพื่อให้ข้อมูลแสดงผลถูกต้องตามเงื่อนไข-->

@stop <!--จบการแสดงผล content-->