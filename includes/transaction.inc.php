<?php

if (isset($_POST['deposit'])) {
 require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $status="requested";

  $date=$_POST["date"];

  $amount=$_POST["amount"];
  
  $trid=$_POST["trid"];



 deposit($conn,$status,$date,$amount,$trid);


  
  

}

if (isset($_POST['withdraw'])) {
 require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
  $status="requested";

  $date= date("Y/m/d") ;

  $amount=$_POST["amount"];
  
  $trid=$_POST["trid"];



 withdraw($conn,$status,$date,$amount,$trid);


  
  

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






