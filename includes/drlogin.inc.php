<?php


	 //upload dr. login code
	$username=$_POST["email"];
	$pwd=$_POST["password"];

	
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   if (empty_Input_login($username,$pwd)!==false) {
   	header("location:../login.php?error=emptyinput");
   	exit();
   }

   logindr($conn,$username,$pwd);





   







