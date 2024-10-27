<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';
$statused=$_SESSION["status"];
 if (isset($_GET["title"])) {
  if ($_GET['title']=="inactive") {
     session_unset();
   session_destroy();
    
     header("location:login.php?title=".$statused." ");
}
  if ($_GET['title']=="registered") {
 
     header("location:onboarding-email.php?title=".$statused." ");
}
}
  ?>

<head>
<meta charset="utf-8">
<title>Medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/plugins/apex/apexcharts.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<?php
 include_once'header3.php';


  ?>



<?php
include_once 'includes/dbh.inc.php'
?>

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

<?php
 include_once'drsidebar.php';


  ?>
</div>
<div class="col-md-7 col-lg-8 col-xl-9">

<div class="row">
<div class="col-lg-8">
<div class="card dash-cards">
<div class="card-header">
<div class="today-appointment-title">
<h5 class="mb-0">Appointments Booked</h5>
<a href="appointments.php"><h6 class="mb-0">View All <i class="feather-arrow-right"></i></h6></a>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<tbody>


<?php



$search=mysqli_real_escape_string($conn,$_SESSION['id']);
$book="booked";
$sql="SELECT * FROM bookedapt WHERE drid LIKE '$search%' And status LIKE '%$book%'  ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>
<h2 class='table-avatar'>
<a href='' class='avatar avatar-m me-2'></a>
<a href='profile.php?title=".$row['pid']."'>".$row['pname']." <span>".$row['pid']."</span></a>
</h2>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>in person</h6>
<p class='mb-0'>clinic</p>
</div>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>in person</h6>
<p class='mb-0'>clinic</p>
</div>
</td>
<td class='text-center'><a href='profile.php?title=".$row['pid']."'><i class='fas fa-chevron-right'></i></a></td>
</tr> ");
          echo" ";
         //The search 2;
}


}
else{
    echo("no appointment booked");
          
}



 




                              ?>


</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-lg-8">
<div class="card dash-cards">
<div class="card-header">
<div class="today-appointment-title">
<h5 class="mb-0">Appointments Confirmed</h5>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<tbody>


<?php



$search=mysqli_real_escape_string($conn,$_SESSION['id']);
$book="confirmed";
$sql="SELECT * FROM bookedapt WHERE drid='$search' And status LIKE '%$book%'  ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>
<h2 class='table-avatar'>
<a href='' class='avatar avatar-m me-2'></a>
<a href='profile.php?title=".$row['pid']."'>".$row['pname']." <span>".$row['pid']."</span></a>
</h2>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>Status</h6>
<p class='mb-0'>".$row['status']." </p>
</div>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>in person</h6>
<p class='mb-0'>clinic</p>
</div>
</td>
<td class='text-center'><a href='profile.php?title=".$row['pid']."'><i class='fas fa-chevron-right'></i></a></td>

</tr> ");
          echo" ";
         //The search 2;
}


}
else{
   echo("no appointment confirmed");
          
}



 




                              ?>


</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-lg-8">
<div class="card dash-cards">
<div class="card-header">
<div class="today-appointment-title">
<h5 class="mb-0">Appointments canceled</h5>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<tbody>


<?php



$search=mysqli_real_escape_string($conn,$_SESSION['id']);
$book="canceled";
$sql="SELECT * FROM bookedapt WHERE drid LIKE '$search%' And status LIKE '%$book%'  ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>
<h2 class='table-avatar'>
<a href='' class='avatar avatar-m me-2'></a>
<a href='profile.php?title=".$row['pid']."'>".$row['pname']." <span>".$row['pid']."</span></a>
</h2>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>Status</h6>
<p class='mb-0'>".$row['status']." </p>
</div>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>in person</h6>
<p class='mb-0'>clinic</p>
</div>
</td>
<td class='text-center'><a href='profile.php?title=".$row['drid']."'><i class='fas fa-chevron-right'></i></a></td>
</tr> ");
          echo" ";
         //The search 2;
}


}
else{
     echo("no appointment canceled");
          
}



 




                              ?>


</tbody>
</table>
</div>
</div>
</div>
</div>

</div>


</div>

</div>
</div>
</div>


<?php
include_once 'footer.php'
?>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/js/circle-progress.min.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/js/feather.min.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/js/owl.carousel.min.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/plugins/apex/apexcharts.min.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/plugins/apex/chart-data.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>

<script src="assets/js/script.js" type="69fd764cf3c0d24f26c5b367-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="69fd764cf3c0d24f26c5b367-|49" defer=""></script></body>

</html>