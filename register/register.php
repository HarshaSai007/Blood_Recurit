<?php

include '../conn.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
  $username = $_POST['name'];
  $moblie = $_POST['moblie'];
  $b_grp = $_POST['b_grp'];
  $pass = $_POST['pass'];
  $lat = $_POST['lat'];
  $lon = $_POST['lon'];

  $sql = "INSERT INTO users (name,moblie,pass,blood_grp,lat,lon) VALUES ('$username','$moblie', '$pass','$b_grp','$lat', '$lon')";


  $conn->query($sql);
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>B | register</title>
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
<body onload="getLocation();">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.png');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="form" method="POST" action="register.php" id="form">

				<input type="hidden" name="lat" id="lat" value="">
					<input type="hidden" name="lon" id="lon" value="">


					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
					    Register Here
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="name" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Moblie">
						<input class="input100" type="number" name="moblie" placeholder="Moblie Number">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Blood group">
						<input class="input100" type="text" name="b_grp" placeholder="Blood Group">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							sign Up
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="../login/login.php">
							login
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


	<script>

function getLocation(){
    if(navigator.geolocation){
       navigator.geolocation.getCurrentPosition(showPosition,ShowError);
    }
}

function showPosition(position){
    document.querySelector('form input[name = "lat"]').value = position.coords.latitude;
    document.querySelector('form input[name = "lon"]').value = position.coords.longitude;
    }


function ShowError(error){
    switch(error.code){
        case error.PERMISSION_DENIED:
        alert("You Must Allow The Request For Geolocation To Get The Current Location");
        location.reload();
        break;
    }
}



	</script>
</body>
</html>