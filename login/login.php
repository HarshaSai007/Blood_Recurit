<?php

session_start();
include '../conn.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $moblie = $_POST['moblie'];
  $pass = $_POST['pass'];

  $query = "SELECT * FROM users WHERE moblie=?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "i", $moblie);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if($moblie == '7732061677' and $pass == '1234'){
        $_SESSION['moblie'] = $moblie;
        header("Location: ../dash.php");
    }

  elseif ($pass == $row['pass']){
      $_SESSION['moblie'] = $moblie;
      header("Location: ../index.php");
    } 
    
    else {
		$error_message = 1 ;
    }
  } else {
	   $error_message = 2;
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>B | login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.png');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="login.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Mobile">
						<input class="input100" type="number" name="moblie" placeholder="Moblie">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="../register/register.php">
							Create Account.
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>