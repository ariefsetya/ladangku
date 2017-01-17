<!DOCTYPE html>
<html>
	<head>
		<title>Bio Farming an Agriculture Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>

			<!--mobile apps-->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="Bio Farming Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
				Smartphone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!--//mobile apps-->

			<!-- Custom Theme files -->
			<link href="{{url('web-front/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
			<link href="{{url('web-front/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
			<!-- //Custom Theme files -->
			<!-- js -->
			<script src="{{url('web-front/js/jquery-1.11.1.min.js')}}"></script>
			<!-- //js -->

			<!--web-fonts-->
			<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
			<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
			<!--//web-fonts-->

			<!-- start-smooth-scrolling-->
			<script type="text/javascript" src="{{url('web-front/js/move-top.js')}}"></script>
			<script type="text/javascript" src="{{url('web-front/js/easing.js')}}"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();

					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
			<!--//end-smooth-scrolling-->
	</head>

	<body>
	@yield('body')

	<!--footer-->
	<div class="footer">
		<div class="footer-info">
			<div class="container">
				<div class="icons">
					<ul>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><img src="{{url('web-front/images/i1.png')}}" alt=""/></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><img src="{{url('web-front/images/i2.png')}}" alt=""/> </a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+"><img src="{{url('web-front/images/i3.png')}}" alt=""/></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="LinkedIn"><img src="{{url('web-front/images/i4.png')}}" alt=""/> </a></li>
					</ul>
					<script>$(function () {
					  $('[data-toggle="tooltip"]').tooltip()
					})</script>
				</div>
				<p>&copy; 2017 Ladangku . All rights reserved.</p>
			</div>
		</div>
	</div>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{url('web-front/js/bootstrap.js')}}"></script>
</body>
</html>
