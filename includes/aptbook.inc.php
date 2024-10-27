<?php

if (isset($_POST['submit'])) {
session_start();
	$apttime=$_POST['time'];
    $date=$_SESSION['date'];
	 //upload apt booking code
  
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   require_once 'transaction.inc.php';
 aptbook($conn,$apttime,$date);
}

  
  





