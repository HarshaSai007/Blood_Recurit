<?php
include "conn.php";
include "query.php";
include "i_loc.php";


session_start();

if (!isset($_SESSION['moblie'])) {
 
  header("Location: login/login.php");
  exit();
}



require 'vendor\autoload.php';
use Twilio\Rest\Client;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $moblie = $_SESSION['moblie'];
  $grp = $_POST['grp'];

  // $lat = $_POST['lat'];
  // $lon = $_POST['lon'];


 

  
  $sql1 = "SELECT moblie FROM users WHERE blood_grp='$grp'";
  $result1 = $conn->query($sql1);

  // $sql2 = "UPDATE users SET lat='$lat', lon='$lon' WHERE moblie = '$moblie'";
  // $conn->query($sql2);

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC60df12d0cc71a3ea9f4e01fa0a666a47';
$auth_token = '79a98e2d2270acaf1b3f0aa58a2d3d74';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+1 475 255 2697";

$client = new Client($account_sid, $auth_token);




while($row = $result1->fetch_assoc()) {
  $phone_number = $row['moblie'];
  
  
  // Send message using Twilio
  $message = $client->messages->create(
      '+91 '.$phone_number,
      array(
          'from' => '+1 475 255 2697',
          'body' => 'Need Urgent Blood '.$grp.' Near Your Area Contact Number ' . $moblie 
      )
  );
  

}
}


echo "<script>document.write(latitude1)</script>";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blood Line
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body onload="getLocation();">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Blood Line</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
           <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Profile</a></li>
          <li><a class="nav-link scrollto" href="dashboard/index.php">Dashboard</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> 
            </ul>
          </li> -->
           <li><a class="nav-link scrollto" href="logout.php">Logout</a></li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Blood Line</span></h2>
          <p class="animate__animated fanimate__adeInUp">Alerts The Near By People</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> -->

      <!-- Slide 3 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> -->

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>
  <!-- End Hero -->
<br><br>
<br>

 <div class="container">
  <h3 class="thin-heading mb-4">Search For Blood Donors</h3>

              <form class="mb-5" name="form" id="form" method="post" action="index.php" autocomplete="off">
                
                <input type="hidden" name="lat" value="">             
                <input type="hidden" name="lon" value="">


                <div class="row">
                  <!-- <div class="col-md-3 form-group">
                    <label for="grp">Enter Blood Group</label>
                    <input type="text" class="form-control" name="grp" id="grp" placeholder="Blood Group" required>
                  </div> -->
                  <div class="col-md-3 form-group">
                  <input type="text" placeholder="Enter Blood Group" name="grp" class="input">
                  </div>
                </div>
                  <br>
                
                <div class="row">
                  <div class="col-12">
                   <button form="form" type="submit">Alert</button>
                  
                </div>
              </form>
            </div>

            <table class="rwd-table">
              <tr>
                <th>Name</th>
                <th>Moblie</th>
                <th>Email</th>
                <th>Map</th>
              </tr>
              <tr>
                <td data-th="name"><?php echo "<script>document.writeln(latitude1);</script>"; ?></td>
                <td data-th="moblie"></td>
                <td data-th="email"></td>
                <td data-th="map"></td>
              </tr>
              
            </table>
            
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>

  <script>
     let latitude1 = [];
    let longitude1 = [];
    function getLocation(){
    if(navigator.geolocation){
       navigator.geolocation.getCurrentPosition(showPosition,ShowError);

    }
}

function showPosition(position){
    document.querySelector('.mb-5 input[name = "lat"]').value = position.coords.latitude;
    document.querySelector('.mb-5 input[name = "lon"]').value = position.coords.longitude;

    var lati = <?php echo $lat1; ?>;
    var longi = <?php echo $lon1; ?>;

    for (var i = 0; i < lati.length; i++) {
    let spotCoordinates1 = [lati[i], longi[i]];


let center = {lat: position.coords.latitude, lng: position.coords.longitude};
let radius = 1000 //in kms

checkIfInside(spotCoordinates1,center,radius);
    }

   

function checkIfInside(spotCoordinates,center,radius) {

    let newRadius = distanceInKmBetweenEarthCoordinates(spotCoordinates[0], spotCoordinates[1], center.lat, center.lng);
    console.log(newRadius)

   
    if( newRadius < radius ) {
        //point is inside the circle
       
        console.log(spotCoordinates[0])
        latitude1.push(spotCoordinates[0])
        longitude1.push(spotCoordinates[1])

        
        console.log('inside')
        
    }
    
    else if(newRadius > radius) {
        //point is outside the circle
        console.log('outside')
    }
    else {
        //point is on the circle
        console.log('on the circle')
    }

}

function distanceInKmBetweenEarthCoordinates(lat1, lon1, lat2, lon2) {
  var earthRadiusKm = 6371;

  var dLat = degreesToRadians(lat2-lat1);
  var dLon = degreesToRadians(lon2-lon1);

  lat1 = degreesToRadians(lat1);
  lat2 = degreesToRadians(lat2);

  var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
          Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  return earthRadiusKm * c;
}

function degreesToRadians(degrees) {
  return degrees * Math.PI / 180;
}
}


function ShowError(error){
    switch(error.code){
        case error.PERMISSION_DENIED:
        alert("You Must Allow The Request For Geolocation To Get The Current Location");
        location.reload();
        break;
    }
}



console.log(latitude1)





  </script>
 

</body>

</html>