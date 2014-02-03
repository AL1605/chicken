@extends('layouts.master') <!--ระบบจัดซื้ออาหาร		-ส่วนของการสั่งซื้อลูอาหาร-->	<!--กำหนดใช้งาน layout-->

@section('content') <!--กำหนดให้เริ่มแสดงผล content-->

<h1>Order Food Form</h1>
<hr />

{{ Form::open(array('class'=>'form-horizontal')) }}	<!--เริ่มต้นการทำงานของ form-->

<div class="control-group">
	{{ Form::label('name', 'Name : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ Name-->
	<div class="controls">
		{{ Form::text('name') }} <!--textbox สำหรับกรอกชื่อ name-->
	</div>
</div>
<div class="control-group">
	{{ Form::label('amount', 'Amount : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ amount-->
	<div class="controls">
		{{ Form::text('amount') }} <!--textbox สำหรับกรอกชื่อ amount-->
	</div>
</div>
<div class="form-actions">
	{{ Form::submit('Save', array('class'=>'btn btn-success')) }} <!--submit สำหรับกด save-->
</div>

{{ Form::close() }} <!--จบการทำงานของ form-->

@stop <!--จบการแสดงผล content-->
