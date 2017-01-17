<!DOCTYPE html>
<html>
<head>
<title>Petani Ladangku - @yield('title')</title>
<link href="{{url('admin-back/css/bootstrap.css')}}" rel="stylesheet" type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="{{url('admin-back/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Metro Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="total-content">
		<div class="col-md-3 side-bar">
			<div class="text-center">
				<hr>
				<img src="{{url('web-front/images/logo.png')}}" style="height:100px;background: #fff;border-radius: 50px;">
				<hr>
				<a href=""><h1 style="color:white;">LADANGKU.ID</h1></a>
				<a href=""><h3 style="color:white;">Petani</h3></a>
				<hr>
			</div>
			<div class="navigation">
				<h3>Master Data</h3>
				<ul>
					<li><a href=""><i class="dash"></i></a></li>
					<li><a href="{{route('harvest.my-product')}}">Produk Saya</a></li>
				</ul>
			</div>
			<div class="navigation">
				<h3>Transaksi</h3>
				<ul>
					<li><a href=""><i class="cal"></i></a></li>
					<li><a href="{{route('harvest.start-plant')}}">Mulai Penanaman</a></li>
				</ul>
				<ul>
					<li><a href=""><i class="fat"></i></a></li>
					<li><a href="{{route('harvest.harvest')}}">Dalam Penanaman</a></li>
				</ul>
				<ul>
					<li><a href=""><i class="rev"></i></a></li>
					<li><a href="{{route('harvest.sell-harvest')}}">Jual Hasil Panen</a></li>
				</ul>
			</div>
			<!-- <div class="navigation">
				<h3>Laporan</h3>
				<ul>
					<li><a href=""><i class="rev"></i></a></li>
					<li><a href="{{route('harvest.income')}}">Pendapatan</a></li>
				</ul>
				<ul>
					<li><a href=""><i class="fat"></i></a></li>
					<li><a href="{{route('harvest.stock-harvest')}}">Stok Hasil Panen</a></li>
				</ul>
			</div> -->
		</div>
		<div class="col-md-9 content">
			<div class="home-strip">
				<div class="view"><!-- 
					<ul>
						<li><a href=""><i class="refresh"></i></a></li>
						<li>
								  <div id="dd1" class="wrapper-dropdown-1"><i class="msgs"></i><span class="red">3</span>
									<ul class="dropdown">
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
										<li><a href="">
										   <div class="user_img"><img src="{{url('admin-back/images/avatar2.jpg')}}" alt=""></div>
										   <div class="notification_desc">
										   	<p>Lorem ipsum dolor sit amet</p>
										   	<p><span>1 hour ago</span></p>
										   	</div>
										   <div class="clear"> </div>
										 </a></li>
										 <li class="odd"><a href="">
										    <div class="user_img"><img src="{{url('admin-back/images/avatar.jpg')}}" alt=""></div>
										   <div class="notification_desc">
										   	<p>Lorem ipsum dolor sit amet </p>
										   	<p><span>1 hour ago</span></p>
										   	</div>
										   <div class="clear"> </div>
										 </a></li>
										 <li><a href="">
										   <div class="user_img"><img src="{{url('admin-back/images/avatar1.jpg')}}" alt=""></div>
										   <div class="notification_desc">
										   	<p>Lorem ipsum dolor sit amet </p>
										   	<p><span>1 hour ago</span></p>
										   	</div>
										   <div class="clear"> </div>
										 </a></li>
										<div class="notification_bottom">
											<h3><a href="">See all messages</a></h3>
										</div> 
									</ul>
							   </div>
						   </li>
						<li>
								  <div id="dd3" class="wrapper-dropdown-3"><i class="bell"></i><span class="blue">5</span>
									<ul class="dropdown">
										<div class="notification_header">
											<h3>You have 5 notifications</h3>
										</div>
										<li><a href="">
										   <div class="user_icon1"><i class="nur"></i></div>
										   <div class="notification_desc">
										   	<p>New user registered</p>
										   	<p><span>2 minutes ago</span></p>
										   	</div>
										   <div class="clear"> </div>
										 </a></li>
										 <li class="odd"><a href="">
										    <div class="user_icon2"><i class="cancel"></i></div>
										   <div class="notification_desc">
										   	<p>Lorem ipsum dolor sit amet </p>
										   	<p><span>6 minutes ago</span></p>
										   	</div>
										   <div class="clear"> </div>
										 </a></li>
										 <li><a href="">
										   <div class="user_icon3"><i class="lock"></i></div>
										   <div class="notification_desc">
										   	<p>Lorem ipsum dolor sit amet </p>
										   	<p><span>10 minutes ago</span></p>
										   	</div>
										   <div class="clear"> </div>
										 </a></li>
										<div class="notification_bottom">
											<h3><a href="">See all notifications</a></h3>
										</div> 
									</ul>
							   </div>
						   </li>
					</ul> -->
				</div>
				<div class="search"><!-- 
					<div class="search2">
					  <form>
						<input type="submit" value="">
						 <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
					  </form>
					</div> -->
				</div>
				<div class="member">
					<p><a href=""><i class="men"></i></a><a href="">{{Auth::user()->name}}</a></p>
					<div id="dd" class="wrapper-dropdown-2" tabindex="1"><span><img src="{{url('admin-back/images/settings.png')}}"/></span>
							<ul class="dropdown">
				<!-- 			
									<li><a href="">View Profile </a></li>
									<li><a href="">Lists</a></li>
									<li><a href="">Help</a></li>
									<li><a href="">Activity log</a></li>
									<li><a href="">Report a problem</a></li> -->
									<li><a href="{{route('logout')}}">Log out</a></li>
							</ul>
					</div>
			<div class="clearfix"></div>			
			</div>
			<div class="clearfix"></div>	
				</div>
				<div class="clearfix"></div>
			

	@yield('body')


<script src="{{url('admin-back/js/jquery.min.js')}}"></script>
			<script type="text/javascript">
							function DropDown(el) {
								this.dd1 = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd1 = new DropDown( $('#dd1') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-1').removeClass('active');
								});
				
							});
							function DropDown(el) {
								this.dd3 = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd3 = new DropDown( $('#dd3') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-3').removeClass('active');
								});
				
							});
			</script>
			<!-----end-wrapper-dropdown-2---->
			<!-----start-script---->
			<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});
				
							});
			</script>
	<script src="{{url('admin-back/js/jquery.easydropdown.js')}}"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	@yield('footer')
		<div class="clearfix"></div>
	<div class="footer">
			<div class="copyright text-center">
					<p>&copy; 2015 All rights reserved | Template by  <a href="">  W3layouts</a></p>
			</div>		
		</div>
</body>
</html>