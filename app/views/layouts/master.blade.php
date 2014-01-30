<!--สร้างหน้าจอสำหรับระบบเลี้ยงไก่-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Chicken V 1.0</title>
	{{ HTML::style('css/bootstrap.min.css') }} <!--เป็นการเชื่อม bootstrap.min.css เข้ากับโปรเจค-->
	{{ HTML::style('css/style.css') }} <!--เป็นการเชื่อม style.css เข้ากับโปรเจค-->
</head>
<body>
	<header>
		<div class="container">
			<h1>Chicken V 1.0</h1>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="span3">
				@include('layouts.menu') <!--เป็นการ include ไฟล์ menu มาวาง-->
			</div>
			<div class="span9 content">
				@yield('content') <!--เป็นการกำหนดส่วนแสดง content ของหน้าเว็ป-->
			</div>
		</div>
	</div>
</body>
</html>