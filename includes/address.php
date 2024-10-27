<?php
 //upload dontdelete
if (isset($_POST['submit'])) {

	
   $home=$_POST["address"];
	
    
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
 address($conn,$home);


  
  

}
if (isset($_POST['button'])) {

    
   $home=$_POST["address"];
    
    
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
 oAddress($conn,$home);


  
  

}
else {



}




