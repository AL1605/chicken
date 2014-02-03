@extends('layouts.master') <!--การจัดการฟาร์ม		-ส่วนของการเพิ่มข้อมูลฟาร์ม-->	<!--กำหนดใช้งาน layout-->

@section('content') <!--กำหนดให้เริ่มแสดงผล content-->

<h1>Farm Form</h1>
<hr />

{{ Form::model($farm, array('class'=>'form-horizontal')) }}	<!--เริ่มต้นการทำงานของ form-->

<div class="control-group">
	{{ Form::label('name', 'Name : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ name-->
	<div class="controls">
		{{ Form::text('name') }} <!--textbox สำหรับกรอกชื่อ name-->
	</div>
</div>
<div class="form-actions">
	{{ Form::submit('Save', array('class'=>'btn btn-success')) }} <!--submit สำหรับกด save-->
</div>

{{ Form::close() }} <!--จบการทำงานของ form-->

@stop <!--จบการแสดงผล content-->
