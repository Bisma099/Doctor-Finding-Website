<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


  ?>
<head>
<meta charset="utf-8">
<title>medico</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<?php
 include_once'header2.php';


  ?>

 <?php
include_once 'includes/dbh.inc.php'
?>



<div class="content">
<div class="container">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="booking-doc-info">
    <?php


$title=mysqli_real_escape_string($conn, $_GET['title']);
//$id=mysqli_real_escape_string($conn,$_GET['date']);
//$searched=mysqli_real_escape_string($conn,$_POST['loco1']);
$sql="SELECT * FROM apttime WHERE id='$title' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);


if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
$doctor=$row['drname'];
$_SESSION['date']=$row['dated'];
$_SESSION['starttime']=$row['starttime'];
$_SESSION['endtime']=$row['endtime'];
$_SESSION['degree']=$row['degree'];
$_SESSION['draddress']=$row['address'];
$_SESSION['dprofile']=$row['profile'];
$_SESSION['drfee']=$row['fees'];
  echo("<a href='doctor-profile.html' class='booking-doc-img'>
<img src='admin1/uploads/".$row['profile']."' alt='User Image'>
</a>");

   
         
}}




?>

<div class="booking-info">
<h4><a href="doctor-profile.html">
	<?php


$title=mysqli_real_escape_string($conn, $_GET['title']);
//$id=mysqli_real_escape_string($conn,$_GET['date']);
//$searched=mysqli_real_escape_string($conn,$_POST['loco1']);
$sql="SELECT * FROM apttime WHERE id='$title' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);


if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
$doctor=$row['drname'];
$_SESSION['date']=$row['dated'];
$_SESSION['starttime']=$row['starttime'];
$_SESSION['endtime']=$row['endtime'];
$_SESSION['degree']=$row['degree'];
$_SESSION['draddress']=$row['address'];
$_SESSION['dprofile']=$row['profile'];
$_SESSION['drfee']=$row['fees'];


         echo("<div  class='' style='height:auto;  padding: 25px;'><h4>Dr:".$row['drname']."</h4>");
         
}}




?></a></h4>
<p><?php  
print( $_SESSION['degree']);
 $_SESSION['degree'];
?></p>
<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> <?php  
print( $_SESSION['draddress']);
 $_SESSION['draddress'];
?></p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-4 col-md-6">
<h4 class="mb-1"><?php


$title=mysqli_real_escape_string($conn, $_GET['title']);

//$id=mysqli_real_escape_string($conn,$_GET['date']);
//$searched=mysqli_real_escape_string($conn,$_POST['loco1']);
$sql="SELECT * FROM apttime WHERE id='$title' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);


if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
$doctor=$row['drname'];
$_SESSION['date']=$row['dated'];
$_SESSION['starttime']=$row['starttime'];
$_SESSION['endtime']=$row['endtime'];
$_SESSION['draddress']=$row['address'];
$_SESSION['dprofile']=$row['profile'];
$_SESSION['drid']=$row['drid'];

 

         echo(" ".$row['dated']." ");
         
}}




?></h4>
<p class="text-muted"></p>
</div>

</div>

<div class="card booking-schedule schedule-widget">

<div class="schedule-header">
<div class="row">
<div class="col-md-12">

<div class="day-slot">
	
<ul>

<a href="#">

</a>
</li>
<li>

<span class="slot-date"><?php


$title=mysqli_real_escape_string($conn, $_GET['title']);
//$id=mysqli_real_escape_string($conn,$_GET['date']);
//$searched=mysqli_real_escape_string($conn,$_POST['loco1']);
$sql="SELECT * FROM apttime WHERE id='$title' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);


if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
$doctor=$row['drname'];
$_SESSION['drname']=$row['drname'];
$_SESSION['date']=$row['dated'];
$_SESSION['services']=$row['service'];
$_SESSION['starttime']=$row['starttime'];
$_SESSION['endtime']=$row['endtime'];
$_SESSION['draddress']=$row['address'];
$_SESSION['dprofile']=$row['profile'];
$_SESSION['caddress']=$row['address'];
 

         echo(" ".$row['dated']." ");
         
}}




?></span>
</li>



<a href="#">

</a>
</li>
</ul>
</div>

</div>
</div>
</div>


<div class="schedule-cont">
<div class="row">
<div class="col-md-12">

<div class="time-slot">
    <form action="files2.php" method="POST" enctype="multipart/form-data" >
        <span>
<?php
$drid=$_SESSION['drid'];

$title=mysqli_real_escape_string($conn, $drid);
 $date = date("Y-m-d");
//$id=mysqli_real_escape_string($conn,$_GET['date']);
//$searched=mysqli_real_escape_string($conn,$_POST['loco1']);
$sql="SELECT  selected1, selected2, selected4, selected3 FROM timer WHERE drid='$title' AND dated='$date' limit 1;";

$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);


if ($queryresult > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

       
        echo("<div class='form-check-inline visits me-0'>
<label class='visit-btns'>
<input type='checkbox' class='form-check-input' data-date='2021-05-21' data-timezone='Asia/Calcutta' data-start-time='15:00:00' data-end-time='15:20:00' data-session='1' name='time' value='" . $row['selected1'] . "'>
<span class='visit-rsn' data-bs-toggle='tooltip' title='" . $row['selected1'] . "'>" . $row['selected1'] . "</span>
</label>
</div><br>");
        echo("<div class='form-check-inline visits me-0'>
<label class='visit-btns'>
<input type='checkbox' class='form-check-input' data-date='2021-05-21' data-timezone='Asia/Calcutta' data-start-time='15:00:00' data-end-time='15:20:00' data-session='1' name='time' value='" . $row['selected4'] . "'>
<span class='visit-rsn' data-bs-toggle='tooltip' title='" . $row['selected4'] . "'>" . $row['selected4'] . "</span>
</label>
</div><br>");
        echo("<div class='form-check-inline visits me-0'>
<label class='visit-btns'>
<input type='checkbox' class='form-check-input' data-date='2021-05-21' data-timezone='Asia/Calcutta' data-start-time='15:00:00' data-end-time='15:20:00' data-session='1' name='time' value='" . $row['selected2'] . "'>
<span class='visit-rsn' data-bs-toggle='tooltip' title='" . $row['selected2'] . "'>" . $row['selected2'] . "</span>
</label>
</div><br>");
         echo("<div class='form-check-inline visits me-0'>
<label class='visit-btns'>
<input type='checkbox' class='form-check-input' data-date='2021-05-21' data-timezone='Asia/Calcutta' data-start-time='15:00:00' data-end-time='15:20:00' data-session='1' name='time' value='" . $row['selected3'] . "'>
<span class='visit-rsn' data-bs-toggle='tooltip' title='" . $row['selected3'] . "'>" . $row['selected3'] . "</span>
</label>
</div><br>");
 
    }
}



?>

    <div class="submit-section proceed-btn text-end">

    <button name="paynow" type="button" class="btn btn-success submit-btn" id="paynow-btn">pay now</button>
  </div>
  
  <div id="paynow-form" style="display: none;">
      <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicos";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build the SQL query to fetch appointments based on upcoming dates
$today = date('Y-m-d'); // Get today's date in YYYY-MM-DD format
$query = "SELECT * FROM admin WHERE id=3";

// Execute the query and check for errors
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Error fetching appointments: " . mysqli_error($conn));
}

// Loop through the results and display them in a table
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<label>ACC:".$row['acc']."</label>";
    }
} else {
    echo "No appointments available.";
}

// Close the database connection
mysqli_close($conn);
?>
    <div class="change-photo-btn">
      <span><i class="fa fa-upload"></i> Upload screenshot (optional)</span>
      <input type="file" name="file" class="upload">
    </div>
    <br>
    <div class="form-group">
      <label>trid</label>
      <input name="trid" type="text" class="form-control">
     <br>     <button name="submit" class="btn btn-primary submit-btn">book</button>

    </div>
<script>
  document.getElementById("paynow-btn").addEventListener("click", function() {
    document.getElementById("paynow-form").style.display = "block";
     document.getElementById("paynow-btn").style.display = "none";
     document.getElementById("paylater-btn").style.display = "none";
  });
</script>
</form>

</div>

</div>

    <form action="files2.php" method="POST" enctype="multipart/form-data" id="myForm" style="display: none;">

<div class="form-group">
<label>date of transaction</label>
<input name="date" type="date" class="form-control">
</div>


</form>
    <script>
        function showForm() {
            var form = document.getElementById("myForm");
            form.style.display = "block";
        }
          function hideForm() {
            var form = document.getElementById("myForm");
            form.style.display = "none";
        }
    </script>
</div>
</div>
</div>



<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="69619b6b3be47c9d655b32ca-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="69619b6b3be47c9d655b32ca-text/javascript"></script>

<script src="assets/js/moment.min.js" type="69619b6b3be47c9d655b32ca-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="69619b6b3be47c9d655b32ca-text/javascript"></script>

<script src="assets/js/feather.min.js" type="69619b6b3be47c9d655b32ca-text/javascript"></script>

<script src="assets/js/script.js" type="69619b6b3be47c9d655b32ca-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="69619b6b3be47c9d655b32ca-|49" defer=""></script></body>

</html>