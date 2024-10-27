<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "medicos");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Extract the form data
  $doctor_name = $_GET["dr"];
   $patient = $_GET["error"];
    $drid = $_GET["title"];
  $rating = $_POST["rating"];
  $title = $_POST["title"];
  $review = $_POST["review"];
  $status = 'registered';
  $terms_accept = $_POST["terms_accept"];

  // Prepare the SQL query
  $sql = "INSERT INTO  doctor_reviews (doctor_name, rating, title, reviews, status, terms_accept,drid,patient) VALUES ('$doctor_name', '$rating', '$title', '$review', '$status', '$terms_accept', '$drid', '$patient')";

  // Execute the query
  if (mysqli_query($conn, $sql)) {
   header("location:../doctor-profile.php?title=".$drid."");
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>
