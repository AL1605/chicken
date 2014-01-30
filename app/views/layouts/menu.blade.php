<!--สร้างหน้าจอสำหรับระบบเลี้ยงไก่-->
<ul class="nav nav-pills nav-stacked menu">
	<li class="active">
		<div class="head-menu">
			<i class="icon icon-cog icon-white"></i> Settings
		</div>
	</li>
	<li>{{ HTML::link('#', 'User Type') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น User Type-->
	<li>{{ HTML::link('#', 'User') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น User-->
	<li>{{ HTML::link('#', 'Farm') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น Farm-->
</ul>