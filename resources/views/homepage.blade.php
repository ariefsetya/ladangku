@extends('appweb')

@section('body')

<!--banner-->
	<div class="banner">
		<div class="effect5"><!--shadow effect-->
			<div class="container">
				<div class="logo">
					<h1><a href="{{url('')}}"><img style="border: 2px solid; border-radius: 90px; border-color: #159375;" src="{{url('web-front/images/logo2.png')}}" alt="" /></a></h1>
				</div>

				<div class="banner-slider">
					<h2>Ladangku</h2>
					<h3>Untuk Petani Beras Indonesia</h3>
					<h4>Ladangku
						<div class="pushEffect">
							<span> E - Commerce</span>
							<span> Petani Beras</span>
							<span> Terbaik</span>
							<span> dan </span>
							<span> Terpercaya</span>
						</div>
					</h4>
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

	<!--welcome-->
	<div class="welcome">
		<div class="container">
			<h3 class="title">Ladangku</h3>
			<p>Kami adalah sebuah Platform penghubung anda dengan Petani Beras Indonesia</p>
			<div class="welcome-info">
				<div class="col-md-6 welcome-grids">
					<div class="welcome-img">
						<img src="{{url('web-front/images/2.jpg')}}" class="img-responsive zoom-img" style="height:230px;" alt=""/>
					</div>
				</div>
				<div class="col-md-6 welcome-grids">
					<div class="welcome-img">
						<img src="{{url('web-front/images/1.jpg')}}" class="img-responsive zoom-img" style="height:230px;" alt=""/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>Dengan Ladangku anda dapat langsung berinteraksi dengan Petani Beras Pilihan anda tanpa Prantara, untuk mendapatkan Beras Terbaik dengan Harga yang sesuai. tujuan utama kami adalah mensejahterahkan Para Petani Beras di Indonesia dan melindung mereka dan para pembeli hasil Pertanian dari Permainan Harga yang merugikan.</p>
		</div>
	</div>
	<!--//welcome-->

	<!--services-->
	<div id="about">
		<div class="services">
		<div class="container">
			<h3 class="title"></h3>
			<div class="servc-grids">
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<h4>Petani</h4>
					<p>Terhubungan dengan Petaninya Langsung</p>
				</div>

				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<h4>Aman</h4>
					<p>Terhindar dari segala Permainan Harga</p>
				</div>

				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>
					</div>
					<h4>Transparant</h4>
					<p>Harga yang di tentukan sangat jelas sesuai modal Panen setiap Petani</p>
				</div>

				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
					</div>
					<h4>Saling Membantu</h4>
					<p>Saling Mensejahterakan Petani dan Masyarakat luas</p>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
	<!--//services-->

	<!--popular-->
	<div id="petani">
		<div class="popular">
		<div class="container">
			<div class="col-md-8 popular-grids">
				<h4>Kami menyediakan Petani Terbaik dengan Hasil panen terbaik</h4>
				<h5>Pilih Petaninya, Hubungi, dan Beli Hasil Panennya</h5>

				<div class="bottom-popular">
					<div class="col-md-6 popular-text">
						<h6>Beli Hasil Panen</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="{{route('guest.store')}}" class="btn btn-1 btn-1b">Store</a>
					</div>
					<div class="col-md-6 popular-text">
						<h6>Jadi Petani</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#" class="btn btn-1 btn-1b">Jadi Petani</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

			<div class="col-md-4 popular-grids popular-img">
				<img src="{{url('web-front/images/img3.jpg')}}" class="img-responsive zoom-img" alt=""/>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!--//popular-->

	<!--contact-->
	<div class="contact" id="contact">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.899142009709!2d23.72354!3d37.979482999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd238977fb45%3A0xbdf5a6106a003293!2sFashion+Workshop+by+Vicky+Kaya!5e0!3m2!1sen!2sin!4v1440569426817" allowfullscreen></iframe>
			<div class="map-color">
			</div>
		</div>

		<div class="contact-grids">
			<div class="col-md-4 contact-grid news-ltr">
				<div class="newsletter">
					<h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Newsletter</h3>
				</div>
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" >
				</form>
			</div>

			<div class="col-md-5 contact-grid">
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>

			<div class="col-md-3 contact-grid">
				<div class="call">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li>+3402 890 679</li>
							<li>+5356 890 679</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="address">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li>345 Diamond Street,</li>
							<li>Greece.</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="mail">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li><a href="mailto:example@mail.com">mail@example.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//contact-->

@endsection