<?php
 //upload dr.signup (registration) panel


      $testimony=$_POST["input1"];
  
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

   testimony($conn,$testimony);
	




