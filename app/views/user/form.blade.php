@extends('layouts.master') <!--การจัดการผู้ใช้งาน		-ส่วนของการเพิ่มข้อมูลผู้ใช้-->	<!--กำหนดใช้งาน layout-->

@section('content') <!--กำหนดให้เริ่มแสดงผล content-->

<h1>User Form</h1>
<hr />

{{ Form::model($user, array('class'=>'form-horizontal')) }}	<!--เริ่มต้นการทำงานของ form-->

<div class="control-group">
	{{ Form::label('user_type_id', 'Type : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ Type-->
	<div class="controls">
		{{ Form::select('user_type_id', UserType::lists('name', 'id')) }} <!--select box ตั้งชื่อว่า user_type_id แสดงผลแบบ list-->
	</div>
</div>
<div class="control-group">
	{{ Form::label('name', 'Name : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ name-->
	<div class="controls">
		{{ Form::text('name') }} <!--textbox สำหรับกรอกชื่อ name-->
	</div>
</div>
<div class="control-group">
	{{ Form::label('username', 'Username : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ name-->
	<div class="controls">
		{{ Form::text('username') }} <!--textbox สำหรับกรอกชื่อ username-->
	</div>
</div>
<div class="control-group">
	{{ Form::label('password', 'Password : ', array('class'=>'control-label')) }} <!--label แสดงข้อความ Password-->
	<div class="controls">
		{{ Form::password('password') }} <!--password box สำหรับกรอกชื่อ password-->
	</div>
</div>
<div class="form-actions">
	{{ Form::submit('Save', array('class'=>'btn btn-success')) }} <!--submit สำหรับกด save-->
</div>

{{ Form::close() }} <!--จบการทำงานของ form-->

@stop <!--จบการแสดงผล content-->
