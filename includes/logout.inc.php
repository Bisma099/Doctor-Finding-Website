<?php

	 //upload logout code
	session_start();
   session_unset();
   session_destroy();
   header("location:../login.php");
   	exit();









