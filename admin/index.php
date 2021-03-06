<?php  session_start();
if(isset($_SESSION['namauser']))
{
	session_destroy();
	// header('Location:index.php?status=Anda sudah Keluar');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Login Page - SisPa (Sistem Penggajian)</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.1.0/css/font-awesome.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
	<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
	<![endif]-->

	<style type="text/css">
		.pswd{
			width: 61.6%;
		}

		.pass{
			float: right;
			margin-top: -30px;
			margin-right: 5px;
		}
	</style>

<script type="text/javascript">
function validasi(form){
if (form.username.value ==""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}

return (true);
}
</script>
</head>

<body class="login-layout blur-login" OnLoad="document.login.username.focus();">
<div class="main-container">
<div class="main-content">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<div class="login-container">
<div class="center">
	<h1>
		<!-- <i class="ace-icon fa fa-eye green"></i> -->
		<span>SisPa</span>
	</h1>
	<span class="white"><h5>Sistem Penggajian Pegawai & Dosen USU</h5></span>
</div>

<div class="space-6"></div>

<div class="position-relative">
	<div id="login-box" class="login-box visible widget-box no-border">
		<div class="widget-body">
			<div class="widget-main">
				<h4 class="header lighter bigger">
					<center>Please Enter Your Information</center>
				</h4>

				<div class="space-6"></div>

				<form name="form" method="post" action="cek_login.php" onSubmit="return validasi(this)">
					<fieldset>
						<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text"  name="username"  class="form-control" id="input" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
						</label>

						<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<div id="chk">
															<input type="password" name="password" class="pswd" id="pswd2" placeholder="Password" />
														</div>
															<div class="pass"><i id="icon" class="fa fa-eye-slash"></i></div>
														</span>
						</label>

						<div class="space"></div>

						<div class="clearfix">
							<label class="inline">
								<input type="checkbox" class="ace" />
								<span class="lbl"> Remember Me</span>
							</label>

													
							<button class="width-35 pull-right btn btn-sm">
								<i class="ace-icon fa fa-key"></i>
								<span class="bigger-110">Login</span>
							</button>
						</div>

						<div class="space-4"></div>
					</fieldset>
				</form>
			</div><!-- /.widget-main -->

			<div class="toolbar clearfix">
				<div>
				</div>

				<div>
					<a href="#" data-target="#signup-box" class="user-signup-link">
						I want to register
						<i class="ace-icon fa fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div><!-- /.widget-body -->
	</div><!-- /.login-box -->
<script type="text/javascript">

function validasi2(form){

if (form.email.value ==""){
alert("Anda belum mengisikan Email");
form.email.focus();
return (false);
}

if (form.username2.value ==""){
alert("Anda belum mengisikan Username");
form.username2.focus();
return (false);
}

if(form.pwd1.value == form.username2.value){ 
alert("Password tidak boleh sama dengan username!"); 
form.pwd1.focus(); 
return (false);
}

if (form.pwd1.value ==""){
alert("Password tidak boleh kosong");
form.pwd1.focus();
return (false);
}

if(form.pwd1.value.length < 6) { 
alert("Password harus lebih dari 6 karakter!");
form.pwd1.focus(); 
return (false);
} 

if (form.pwd2.value ==""){
alert("Repeat Password tidak boleh kosong");
form.pwd2.focus();
return (false);
}

if(form.pwd1.value ="" && form.pwd1.value != form.pwd2.value) {
alert("Please check that you've entered and Repeat your password!"); 
form.pwd1.focus();
return (false);
}

if (form.nip.value ==""){
alert("Nomer Induk Pegawai Harus diisi");
form.nip.focus();
return (false);
}

return (true);
}


</script>									
	
	
	<div id="forgot-box" class="forgot-box widget-box no-border">
		<div class="widget-body">
			
		</div><!-- /.widget-body -->
	</div><!-- /.forgot-box -->

	<div id="signup-box" class="signup-box widget-box no-border">
		<div class="widget-body">
			<div class="widget-main">
				<h4 class="header lighter bigger">
					<i class="ace-icon fa fa-users blue"></i>
					Registrasi UserId Pegawai
				</h4>

				<div class="space-6"></div>
				<p> Enter your details to begin: </p>

				<form id="form-reg" name="register" method="post" action="daftar.input.php" onSubmit="return validasi2(this)">
					<fieldset>
						<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" id="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
						</label>

						<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" id="username2" name="username2" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
						</label>

						<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="pwd1" name="pwd1" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
						</label>

						<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="pwd2" name="pwd2" class="form-control" placeholder="Repeat password" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
						</label>
						
						<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" id="nip" name="nip" class="form-control" placeholder="Nomer Induk Pegawai" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
						</label>

						<label class="block">
							<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
						</label>

						<div class="space-24"></div>

						<div class="clearfix">
							<button type="reset" class="width-30 pull-left btn btn-sm">
								<i class="ace-icon fa fa-refresh"></i>
								<span class="bigger-110">Reset</span>
							</button>

							<button class="width-65 pull-right btn btn-sm btn-success">
								<span class="bigger-110">Register</span>

								<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>

			<div class="toolbar center">
				<a href="#" data-target="#login-box" class="back-to-login-link">
					<i class="ace-icon fa fa-arrow-left"></i>
					Back to login
				</a>
			</div>
		</div><!-- /.widget-body -->
	</div><!-- /.signup-box -->
</div><!-- /.position-relative -->

<div class="navbar-fixed-top align-right"><!-- 
	<br />
	&nbsp;
	<a id="btn-login-dark" href="#">Dark</a>
	&nbsp;
	<span class="blue">/</span>
	&nbsp;
	<a id="btn-login-blur" href="#">Blur</a>
	&nbsp;
	<span class="blue">/</span>
	&nbsp;
	<a id="btn-login-light" href="#">Light</a> -->
	&nbsp; &nbsp; &nbsp;
</div>
</div>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery.2.1.1.min.js"></script>
<script src="assets/js/show.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

<!--[if IE]>
<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
			$('.widget-box.visible').removeClass('visible');//hide others
			$(target).addClass('visible');//show target
		});
	});



	//you don't need this, just used for changing background
	jQuery(function($) {
		$('#btn-login-dark').on('click', function(e) {
			$('body').attr('class', 'login-layout');
			$('#id-text2').attr('class', 'white');
			$('#id-company-text').attr('class', 'blue');

			e.preventDefault();
		});
		$('#btn-login-light').on('click', function(e) {
			$('body').attr('class', 'login-layout light-login');
			$('#id-text2').attr('class', 'grey');
			$('#id-company-text').attr('class', 'blue');

			e.preventDefault();
		});
		$('#btn-login-blur').on('click', function(e) {
			$('body').attr('class', 'login-layout blur-login');
			$('#id-text2').attr('class', 'white');
			$('#id-company-text').attr('class', 'light-blue');

			e.preventDefault();
		});

	});
</script>
</body>
</html>