<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TH2T</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<LINK REL="SHORTCUT ICON"  HREF="/source/img/logo.png">

<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="source/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="source/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css"  href="source/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
	================================================== -->
	<link rel="stylesheet" type="text/css"  href="source/css/style.css">
	<link rel="stylesheet" type="text/css" href="source/css/nivo-lightbox/nivo-lightbox.css">
	<link rel="stylesheet" type="text/css" href="source/css/nivo-lightbox/default.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<a href="#" class="cd-top">Back To Top</a>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
	==========================================-->
	<nav id="menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container"> 
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand page-scroll" href="#page-top" style="font-size: 50px"><img src="source/img/logo.png" style="    float: left;height: 118px;margin-top: -50px;;">TH2T</a> </div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#portfolio" class="page-scroll">Xem biển báo</a></li>
						<li><a href="#contact" class="page-scroll">Liên hệ</a></li>
						<li>
							<form class="navbar-form navbar-left">
								
					       		 <div class="form-group">
					         		<input type="text" class="form-control" placeholder="Search">
					       		 </div>
					        		<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					      </form>
				
						</li>
						<li>
							<a href="" class="" title="">Đăng nhập</a>
						</li>

					</ul>

				</div>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
		<!-- Header -->
		<header id="header">
			<div class="intro">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="intro-text">
								<p> Chọn hình ảnh bạn muốn tìm biển báo</p>
								<form action="#" method="post" enctype="multipart/form-data">
									<div class="btn btn-success">
										
										<input type="file" name="uploadfile">
									</div><br>								 
									<input type="submit" value="TẢI LÊN" name="submit" class="btn btn-custom btn-lg page-scroll">
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Portfolio Section -->
		<div id="portfolio">
			<div class="container">
				<div class="section-title text-center center">
					<h2>BIỂN BÁO GIAO THÔNG</h2>
					<hr>
					<p></p>
				</div>
			
				<div class="categories">
					@if ($categories && count($categories) > 0)
                    @foreach ($categories as $item)
					<ul class="nav nav-pills" style="margin-left: 300px">						
						<li ><a data-toggle="pill" href="#{{ $item->category_slug }}">{{ $item->category_name }}</a></li>
						
					</ul>
					<div class="tab-content">
					    <div id="{{ $item->category_slug }}" class="tab-pane fade in active ">
					    	@if($signals && count($signals) > 0)
								@foreach ($signals as $item2)
								@if ($item2->signal_category_id == $item->category_id)
							<div class="row">
								
					      <div class="portfolio-items">
					        <div class="col-sm-6 col-md-2 col-lg-3">
					          <div class="portfolio-item">
					            <div class="hover-bg"> <a href="" title=" {{ $item2->signal_content }}" data-lightbox-gallery="gallery1">
					              <div class="hover-text">
					                <h4>{{ $item2->signal_name}}</h4>
					              </div>
					              <img src="source/img/{{ $item2->signal_image}}" class="img-responsive" alt="{{ $item2->signal_name}}"> </a> </div>
					          </div>
					        </div>
					      </div>
					   		</div>
					   	@endif
					   	@endforeach
					   	@endif
					   	</div>
					   
					  </div>

						@endforeach
						@endif
				</div>

			</div>
		</div>
		<!-- Carousel --->
		<div id="team" class="text-center">
			<div class="overlay">
				<div class="container">
					<div class="col-md-8 col-md-offset-2 section-title">
						<h2>Đội của chúng tôi</h2>
						<hr>
						<p></p>
					</div>
					<div id="row">
						
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Section -->
		<div id="contact">
			<div class="container">
				<div class="section-title text-center">
					<h2>Liên hệ</h2>
					<hr>
					<p></p>
				</div>
				<div class="col-md-4">
					<h3>Thông tin liên lạc</h3>
					<div class="contact-item"> <span>Địa chỉ</span>
						<p>Ha Noi University of Industry<br>
							Minh Khai, Ha Noi</p>
						</div>
						<div class="contact-item"> <span>Email</span>
							<p>th2t@company.com</p>
						</div>
						<div class="contact-item"> <span>Điện thoại</span>
							<p> 01647 514 586</p>
						</div>
					</div>
					<div class="col-md-8">
						<h3>Hãy để lại lời góp ý cho chúng tôi</h3>
						<form name="sentMessage" id="contactForm" novalidate>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" id="name" class="form-control" placeholder="Name" required="required">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" id="email" class="form-control" placeholder="Email" required="required">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
								<p class="help-block text-danger"></p>
							</div>
							<div id="success"></div>
							<button type="submit" class="btn btn-custom btn-lg">Gửi</button>
						</form>
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="container text-center">
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<div>
						<p>&copy; All rights reserved. Designed by TH2T</p>
					</div>
				</div>
			</div>
			<script type="text/javascript" src="source/js/jquery.1.11.1.js"></script> 
			<script type="text/javascript" src="source/js/bootstrap.js"></script> 
			<script type="text/javascript" src="source/js/SmoothScroll.js"></script> 
			<script type="text/javascript" src="source/js/nivo-lightbox.js"></script> 
			<script type="text/javascript" src="source/js/jquery.isotope.js"></script> 
			<script type="text/javascript" src="source/js/jqBootstrapValidation.js"></script> 
			<script type="text/javascript" src="source/js/contact_me.js"></script> 
			<script type="text/javascript" src="source/js/main.js"></script>
			<script type="text/javascript" src="source/js/backtotop.js"></script>
	</body>
</html>
<script>


