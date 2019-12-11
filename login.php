<?php
  //session_start();

  require_once "konfigurasi.php";
  $loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Tuladha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts login/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor login/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor login/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css login/util.css">
	<link rel="stylesheet" type="text/css" href="css login/main.css">
<!--===============================================================================================-->
</head>
<body>
	<form action='log.php' method="POST">
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images login/bg-01.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form">
						<span class="login100-form-logo">
							<i class="zmdi zmdi-landscape"></i>
						</span>

						<span class="login100-form-title p-b-34 p-t-27">Log in</span>

						<div class="wrap-input100" data-validate = "Enter username">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100" data-validate="Enter password">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>

						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">Remember me</label>
						</div>

						<div class="container-login100-form-btn">
							<a href="index.php">
							<input type="submit" class="login100-form-btn" value="LogIn" >
						</a>
						</div>
			<div class="pt-3 mx-auto pb-1">
          <button class="btn btn-block btn-social btn-google text-light" type="button" style="height: 40px" onclick="window.location='<?php echo $loginURL ?>';">
           <span class="fa fa-google"></span> Log in with Google
          </button>
         </div>
         <div class="pt-0 mx-auto">
         <button class="btn btn-block btn-social btn-facebook text-light">
           <span class="fa fa-facebook"></span> Log in with Facebook
          </button>
         </div>
						<div class="text-center p-t-5">
							<a class="txt2">Don't have an account yet?</a><a class="txt1" href="signup.php">     Sign Up</a>
					</form>
				</div>
				</div>
			</div>
		</div>



		<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor login/bootstrap/js/popper.js"></script>
	<script src="vendor login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor login/daterangepicker/moment.min.js"></script>
	<script src="vendor login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js login/main.js"></script>



</body>
</html>
