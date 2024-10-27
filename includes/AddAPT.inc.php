<?php
 //upload dr available apts
if (isset($_POST['submit'])) {

	$closetime='any';
	$starttime='any';
 $date = date("Y-m-d");

      $fees=$_POST['fees'];
  
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

if (isset($_POST['submit'])) {
session_start();
     $apttime=$_POST['time'];
    $ided=$_SESSION['id'];
  $date = date('Y-m-d');

      //upload apt booking code
  
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   require_once 'transaction.inc.php';
   // retrieve the values from the POST request
$selected = $_POST['time'];

// process the values to extract the selected checkboxes
$selected_values = [];
foreach ($selected as $value) {
    // sanitize the value to prevent SQL injection
    $sanitized_value = mysqli_real_escape_string($conn, $value);
    // add the sanitized value to the array
    $selected_values[] = $sanitized_value;
}

// construct the SQL query using the selected values
$sql = "INSERT INTO timer (dated,drid,selected1, selected2, selected3, selected4) VALUES ('$date','$ided','{$selected_values[0]}', '{$selected_values[1]}', '{$selected_values[2]}', '{$selected_values[3]}')";

// execute the query
mysqli_query($conn, $sql);


 createapttime($conn,$closetime,$starttime,$date,$fees);


}
}
  


  
  





