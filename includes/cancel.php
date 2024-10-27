 <?php
include_once 'dbh.inc.php'
?>
 <?php
include_once 'functions.inc.php'
?>
<?php
 //upload apt cancelation
$title=mysqli_real_escape_string($conn, $_GET['title']);
cancelapt($conn,$title);