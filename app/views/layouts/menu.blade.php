<!--สร้างหน้าจอสำหรับระบบเลี้ยงไก่-->
<ul class="nav nav-pills nav-stacked menu">
	<li class="active">
		<div class="head-menu">
			<i class="icon icon-cog icon-white"></i> Settings
		</div>
	</li>
	<li>{{ HTML::link('userType', 'User Type') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น User Type--><!--การจัดการประเภทผู้ใช้งาน-->
	<li>{{ HTML::link('user', 'User') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น User--><!--การจัดการผู้ใช้งาน-->
	<li>{{ HTML::link('farm', 'Farm') }}</li> <!--วางจุดเชื่อมโยงลงไปก่อน ให้แสดงข้อความเป็น Farm--><!--การจัดการฟาร์ม-->
	<li class="active">
		<div class="head-menu">
			<i class="icon icon-book icon-white"></i> Order
		</div>
		<li>{{ HTML::link('orderBaby','Order Baby') }}</li><!--ระบบจัดซื้อไก่-->
		<li>{{ HTML::link('orderFood','Order Food') }}</li><!--ระบบจัดซื้ออาหาร-->
	</li>
	<li class="active">
		<div class="head-menu">
			<i class="icon icon-user icon-white"></i> Manager
		</div>
		<li>{{ HTML::link('babyList','Request Baby') }}</li><!--ระบบผู้บริหาร		-จัดซื้อไก่-->
		<li>{{ HTML::link('foodList','Request Food') }}</li><!--ระบบผู้บริหาร		-จัดซื้ออาหาร-->
	</li>
</ul>