<?php

 include_once'header.php';
// Retrieve the column names from the GET parameters and sanitize them
$time= $_POST['time'];

$ided= $_SESSION['apid'];
// Perform the database query to update the columns
require_once 'includes/dbh.inc.php';
$sql = "UPDATE bookedapt SET timed='$time' WHERE status='$ided';";
mysqli_query($conn, $sql);
mysqli_close($conn);

// Redirect back to the project page with a success message
header("Location: patient-profile.php");
exit();
?>
