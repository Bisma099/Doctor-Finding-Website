<?php
 //upload signup patient profile code
if (isset($_POST['submit'])) {
	$name=$_POST["name"];
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$comment=$_POST["comment"];
  
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
 

   contact($conn,$name,$email,$subject,$comment);
   
 

}
else {

header("location:../contact-us.php?error=signupunsuccessful");
      exit();
}




