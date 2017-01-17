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
		<!-- single -->
		<div class="single">
			<div class="container">
				<h2 class="title">Detail Petani</h2>
				<div class="single-info">
						<div class="col-md-8 single-left">
							<h3>Nama Usaha</h3><br>

							<!-- Foto Petani -->
							<div class="admin">
								<div class="admin-left">
									<img src="{{url('web-front/images/img5.jpg')}}" alt=" " class="img-responsive" />
								</div>
								<div class="admin-right">
									<h4><a href="#">{{$farmer->user->name}}</a></h4>
									<p>Detail Keterangan Petani</p>
								</div>
								<div class="clearfix"> </div>
							</div>

							<!-- Foto Ladang petani tersebut -->
							<img src="{{url('web-front/images/img1.jpg')}}" alt=" " class="img-responsive" />

							<!-- Deskripsi Petani atau keterangan hasil panen-->
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
								et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
								voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
								ratione voluptatem sequi nesciunt.
								<i>I will give you a complete account of the system, and
									expound the actual teachings of the great explorer of the truth.
								</i>
								<span>But I must explain to you how all this mistaken idea of denouncing pleasure
									and praising pain was born and I will give you a complete account of the system, and
									expound the actual teachings of the great explorer of the truth, the master-builder
									of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it
									is pleasure
								</span>
							</p>
							<strong>Produk</strong>
							<hr>
							<table class="table">
								<thead>
									<tr>
										<th>Produk</th>
										<th>Stok</th>
										<th>Terjual</th>
										<th>Harga per Satuan</th>
									</tr>
								</thead>
								<tbody>
									@foreach($product as $key)
									<tr>
										<td>{{$key->product->name}}</td>
										<td>{{$key->harvest_amount-\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$key->id)->where('id_product',$key->id_product)->first()['sum(amount)'].' '.$key->units}}</td>
										<td>{{\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$key->id)->where('id_product',$key->id_product)->first()['sum(amount)'].' '.$key->units}}</td>
										<td>{{$key->price_per_units." ".$key->units}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>

						<div class="categories">
							<h4>Informasi Petani</h4>
							<ul>
								<li><a href="#">{{$farmer->phone}}</a></li>
							</ul>
						</div>

						<div class="instagram-feed">
								<h3>Hasil Panen</h3>
								<div class="footer-grid-left">
									<a href="#"><img src="{{url('web-front/images/g1.jpg')}}" alt=" " class="img-responsve" /></a>
								</div><!-- 
								<div class="footer-grid-left">
									<a href="#"><img src="{{url('web-front/images/g2.jpg')}}" alt=" " class="img-responsve" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="#"><img src="{{url('web-front/images/g3.jpg')}}" alt=" " class="img-responsve" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="#"><img src="{{url('web-front/images/g4.jpg')}}" alt=" " class="img-responsve" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="#"><img src="{{url('web-front/images/g5.jpg')}}" alt=" " class="img-responsve" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="#"><img src="{{url('web-front/images/g6.jpg')}}" alt=" " class="img-responsve" /></a>
								</div> -->
								<div class="clearfix"> </div>
							</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //single -->

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