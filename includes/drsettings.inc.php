<?php
 // this panel is for doctor settings


 //upload dr. password change
if (isset($_POST['password'])) {
 require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $pwd=$_POST["password"];
      $pwdrepeat=$_POST["cpassword"];
	if (pwdMatch($pwd,$pwdrepeat)!==false) {
      header("location:../template/settings.php?error=passwordsdontmatch");
      exit();
   }

  
 drpasschange($conn,$pwd);


  
  

}
 //upload dr.user change
if (isset($_POST['username'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

  $username=$_POST["username"];

    
    
 druserchange($conn,$username);


  
  

}
 //upload dr. email change code
if (isset($_POST['email'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $email=$_POST["email"];
      if (emailExist($conn,$email)!==false) {
      header("location:../template/settings.php?error=emailtaken");
      exit();
   }
 
    
    
dremailchange($conn,$email);


  
  

}
 //upload dr. numbers code
if (isset($_POST['numbers'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $number=$_POST["numbers"];
      if (numbersExist($conn,$numbers)!==false) {
      header("location:../template/settings.php?error=emailtaken");
      exit();
   }
 
    
    
drnumberchange($conn,$number);


  
  

}
 //upload dr. Address code
if (isset($_POST['Address'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   $address=$_POST["Address"];
  
draddresschange($conn,$address);


  
  

}
 //upload dr. specialization code
if (isset($_POST['services'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   $special=$_POST["special"];
     $service=$_POST["services"];
  
  
drspecialization($conn,$special,$service);


  
  

}

if (isset($_POST['degree'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   $degree=$_POST["degree"];
     $inst=$_POST["inst"];
      $yoc=$_POST["yoc"];
  
  
dreducation($conn,$degree,$inst,$yoc);


  
  

}




