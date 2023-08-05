<?php
include "conn.php";
session_start();

if(isset($_SESSION['moblie']))
{   
	$moblie = $_SESSION['moblie'];
	unset($_SESSION['moblie']);
	session_destroy();

}

header("Location: login/login.php");
die;