<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}" target="_blank, _self, _parent, _top">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="source/img/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="source/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="source/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/css/util.css">
	<link rel="stylesheet" type="text/css" href="source/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>
				
				<div class="panel-body">
					@if(count($errors)>0)
						<div class="alert alert-danger" style="text-align: center;">
							@foreach ($errors->all() as $err)
								{{$err}} <br>
							@endforeach
						</div>
			
					@endif
					@if(session('thongbao'))
					<div class="alert alert-danger" style="text-align: center;">
						{{session('thongbao')}}
					</div>
					@endif

				</div>
				<form class="login100-form validate-form" action="{{route('dangnhap')}}" method="post">
					 {{ csrf_field()}}
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username là bắt buộc">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="email" placeholder="Nhập Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password là bắt buộc!">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Nhập Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ghi nhớ
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Quên mật khẩu
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Đăng nhập
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="source/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="source/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="source/vendor/bootstrap/js/popper.js"></script>
	<script src="source/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="source/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="source/vendor/daterangepicker/moment.min.js"></script>
	<script src="source/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="source/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="source/js/main.js"></script>

</body>
</html>