<?php

if (isset($_POST['password'])) {
 require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $pwd=$_POST["password"];
      $pwdrepeat=$_POST["cpassword"];
	if (pwdMatch($pwd,$pwdrepeat)!==false) {
      header("location:../template/settings.php?error=passwordsdontmatch");
      exit();
   }

  
 passchange($conn,$pwd);


  
  

}
if (isset($_POST['username'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

  $username=$_POST["username"];



  
    
 userchange($conn,$username);


  
  

}
if (isset($_POST['email'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $email=$_POST["email"];
      if (emailExist($conn,$email)!==false) {
      header("location:../template/settings.php?error=emailtaken");
      exit();
   }
 
    
    
emailchange($conn,$email);


  
  

}
if (isset($_POST['numbers'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $number=$_POST["numbers"];
      if (numbersExist($conn,$numbers)!==false) {
      header("location:../template/settings.php?error=emailtaken");
      exit();
   }
 
    
    
numberchange($conn,$number);


  
  

}
if (isset($_POST['Address'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   $address=$_POST["Address"];
  
addresschange($conn,$address);


  
  

}
if (isset($_POST['bloodgroup'])) {

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   $bloodgroup=$_POST["bloodgroup"];
  
bloodgroup($conn,$bloodgroup);


  
  

}






