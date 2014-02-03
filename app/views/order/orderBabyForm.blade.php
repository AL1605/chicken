@extends('layouts.master') <!--ระบบจัดซื้อไก่		-ส่วนของการสั่งซื้อลูกไก่-->	<!--กำหนดใช้งาน layout-->

@section('content') <!--กำหนดให้เริ่มแสดงผล content-->

<h1>Order Baby Form</h1>
<hr />

{{ Form::open(array('class'=>'form-horizontal')) }}	<!--เริ่มต้นการทำงานของ form-->

<div class="control-group">
	{{ Form::label('farm_id', 'Farm : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ Farm-->
	<div class="controls">
		{{ Form::select('farm_id', Farm::lists('name', 'id')) }} <!--select box ตั้งชื่อว่า farm_id แสดงผลแบบ list-->
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
