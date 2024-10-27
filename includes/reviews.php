<?php
// Connect to the database
$db_host = 'your_db_host';
$db_name = 'your_db_name';
$db_user = 'your_db_user';
$db_pass = 'your_db_pass';
$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $doctor_name = $_POST['doctor_name'];
    $rating = $_POST['rating'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Insert the review into the database
    $stmt = $conn->prepare("INSERT INTO reviews (doctor_name, rating, title, description, date_created) VALUES (:doctor_name, :rating, :title, :description, NOW())");
    $stmt->bindParam(':doctor_name', $doctor_name);
    $stmt->bindParam(':rating', $rating);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->execute();
}
?>
