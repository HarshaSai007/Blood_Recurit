<?php
include '../conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = $_POST['name'];
$moblie = $_POST['moblie'];
$grp = $_POST['b_grp'];

$sql = "INSERT INTO user_d (name,moblie,grp) VALUES ('$name','$moblie', '$grp')";
$conn->query($sql);

}




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>BLOOD DONOR DETAILS</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">ANADA BLOOD BANK</h3>
            <form class="mb-5" method="post" action="index.php">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Moblie*</label>
                  <input type="number" class="form-control" name="moblie" id="moblie"  placeholder="Your moblie">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Blood Group</label>
                  <input type="text" class="form-control" name="b_grp" id="b_grp" placeholder="Your Blood Group">
                </div>
              </div>

             
              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="Submit" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>