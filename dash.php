
<?php
include 'conn.php';

session_start();

if (!isset($_SESSION['moblie'])) {
  header("Location: login/login.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
  $ap = $row['ap'];
  $an = $row['an'];
  $bp = $row['bp'];
  $bn = $row['bn'];
  $abp = $row['abp'];
  $abn = $row['abn'];
  $op = $row['op'];
  $on = $row['on'];


$sql ="UPDATE blood_banks SET ";


}



?>



<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Update BLood Group</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="row justify-content-center">
            <div class="col-md-12">
              
              <h3 class="thin-heading mb-4">Update BLood Group</h3>

              <form class="mb-5" method="post" id="Form" name="Form" action="dash.php" enctype="multipart/form-data">
                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="ap" id="ap" placeholder="A+">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="an" id="an" placeholder="A-">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="bp" id="bp" placeholder="B+">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="bn" id="bn" placeholder="B-">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="abp" id="abp" placeholder="AB+">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="abn" id="abn" placeholder="AB-">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="op" id="op" placeholder="O+">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="on" id="on" placeholder="O-">
                  </div>
                 
                 

                </div>
                  <br> <br>
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send" class="btn btn-primary rounded-0 py-2 px-4">
                    
                  <span class="submitting"></span>
                  <a href="logout.php"><input type="Button" Value="Logout" class="btn btn-primary rounded-0 py-2 px-4"></a>
                  <span class="Logging Out"></span>
                  <a href="user/index.php"><input type="Button" Value="person details" class="btn btn-primary rounded-0 py-2 px-4"></a>
                </div>
              </form>

          


            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

<style>body {
  font-family: "Roboto Mono", monospace;
  background-color: #fff;
  line-height: 1.5; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Oswald", sans-serif !important;
  color: #000;
  text-transform: uppercase; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.text-black {
  color: #000; }

.content {
  padding: 7rem 0; }

.thin-heading {
  font-weight: 300;
  font-size: 40px; }

.form-control {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding: 0;
  border-radius: 0px; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.col-form-label {
  color: #000; }

.btn, .form-control, .custom-select {
  height: 50px; }

.custom-select:active, .custom-select:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #000; }

.heading {
  color: #888;
  letter-spacing: .05rem;
  text-transform: uppercase;
  font-weight: 400; }

.btn {
  border: none;
  border-radius: 0; }
  .btn.btn-primary {
    background: #000;
    color: #fff;
    padding: 15px 20px; }
  .btn:hover {
    color: #fff; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

.box {
  padding: 40px;
  background: #fff;
  -webkit-box-shadow: -30px 30px 0px 0 rgba(0, 0, 0, 0.08);
  box-shadow: -30px 30px 0px 0 rgba(0, 0, 0, 0.08); }
  .box h3 {
    font-size: 14px;
    margin-bottom: 30px;
    text-align: center; }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }
</style>
  
    
    

   

  </body>
</html>