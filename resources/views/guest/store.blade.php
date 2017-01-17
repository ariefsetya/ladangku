@extends('appweb')

@section('body')

<!--banner-->
		<div class="banner">
			<div class="effect5"><!--shadow effect-->
				<div class="container">
					<div class="logo">
						<h1><a href="index.html"><img style="border: 2px solid; border-radius: 90px; border-color: #159375;" src="{{url('web-front/images/logo2.png')}}" alt="" /></a></h1>
					</div>

					<div class="top-nav">
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-center">
									<li class="active"><a href="index.html"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
									<li><a href="#petani" class="scroll link--yaku"><span>P</span><span>E</span><span>T</span><span>A</span><span>N</span><span>I</span></a></li>
									<li><a href="#about" class="scroll link--yaku"><span>F</span><span>I</span><span>T</span><span>U</span><span>R</span></a></li>
									<li><a href="#contact" class="scroll link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span> <span>U</span><span>S</span></a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</nav>
					</div>

				</div>
			</div>
		</div>
		<!--//banner-->

		<!--gallery-->
		<div class="gallery">
			<div class="container">
				<h2 class="title">Petani Kami</h2><br>

				<div class="col-lg-12">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button">Cari Petani</button>
			      </span>
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->

				<div class="gallery-grids">
					@foreach($petani as $key)
					<div class="col-md-4 port-grids view view-fourth">
						<a class="example-image-link" href="{{route('guest.farmer',[$key->phone])}}" data-lightbox="example-set" data-title="">
							<img src="{{url('web-front/images/g1.jpg')}}" class="img-responsive" alt=""/>
							<div class="mask">
								<p><strong>{{$key->user->name}}</strong><br>Detail Petani dan Hasil Panen</p>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!--//gallery-->

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
					<p>&copy; 2017 Ladangku. All rights reserved.</p>
				</div>
			</div>
		</div>
		<!--//footer-->

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

@endsection