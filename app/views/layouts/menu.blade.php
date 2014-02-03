<!--สร้างหน้าจอสำหรับระบบเลี้ยงไก่-->
<ul class="nav nav-pills nav-stacked menu">
	<li class="active">
		<div class="head-menu">
			<i class="icon icon-cog icon-white"></i> Settings
		</div>
		<li>{{ HTML::link('orderBaby', 'Order Baby') }}</li>
		<li>{{ HTML::link('orderFood', 'Order Food') }}</li>
	</li>
	<li>{{ HTML::link('userType', 'User Type') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น User Type-->
	<li>{{ HTML::link('user', 'User') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น User-->
	<li>{{ HTML::link('farm', 'Farm') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น Farm-->
</ul>