<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


  ?> <?php
include_once 'includes/dbh.inc.php'
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

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">


<?php
 include_once'header3.php';


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
<div class="appointments">
<?php



$search=mysqli_real_escape_string($conn,$_SESSION['id']);
$book="booked";
$sql="SELECT * FROM bookedapt WHERE drid LIKE '$search%' and status LIKE '%$book%' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<div class='appointment-list'><div class='profile-info-widget'><a href='patient-profile.html' class='booking-doc-img'><img src='admin1/upload/".$row['profile']."' alt='User Image'></a>
<div class='profile-det-info'>
<h3><a href='patient-profile.html'>".$row['pname']."</a></h3>
<div class='patient-details'>
<h5><i class='far fa-clock'></i> ".$row['dated'].", ".$row['timed']."</h5>
<h5><i class='fas fa-envelope'></i> <a href='email-protection' class='__cf_email__ data-cfemail=c1b3a8a2a9a0b3a581a4b9a0acb1ada4efa2aeac'>[email&#160;protected]</a></h5>
<h5 class='mb-0'><i class='fas fa-phone'></i> ".$row['pnumber']."</h5>
</div>
</div>
</div>
<div class='appointment-action'>
<a  href='profile.php?title=".$row['id']."' class='btn btn-sm bg-info-light' data-bs-toggle='modal' data-bs-target='#appt_details'>
<i class='far fa-eye'></i> View
</a>
<a href='includes/confirmed.php?title=".$row['id']."'; class='btn btn-sm bg-success-light'>
<i class='fas fa-check'></i> Accept
</a>
<a href='includes/cancel.php?title=".$row['id']."'  class='btn btn-sm bg-danger-light'>
<i class='fas fa-times'></i> Cancel
</a>
</div>
</div><br>");
          echo" ";
         //The search 2;
}


}
else{
    echo("no Appointment available");
          
}



 




                              ?>







</div>
</div>
</div>
</div>
</div>


<?php
include_once 'footer.php'
?>

</div>


<div class="modal fade custom-modal" id="appt_details">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Appointment Details</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<ul class="info-details">
<li>
<div class="details-header">
<div class="row">
<div class="col-md-6">
<span class="title">#APT0001</span>
<span class="text">21 Oct 2019 10:00 AM</span>
</div>
<div class="col-md-6">
<div class="text-end">
<button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
</div>
</div>
</div>
</div>
</li>
<li>
<span class="title">Status:</span>
<span class="text">Completed</span>
</li>
<li>
<span class="title">Confirm Date:</span>
<span class="text">29 Jun 2019</span>
</li>
<li>
<span class="title">Paid Amount</span>
<span class="text">$450</span>
</li>
</ul>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="652289bd4224a354c4002875-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="652289bd4224a354c4002875-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="652289bd4224a354c4002875-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="652289bd4224a354c4002875-text/javascript"></script>

<script src="assets/js/feather.min.js" type="652289bd4224a354c4002875-text/javascript"></script>

<script src="assets/js/script.js" type="652289bd4224a354c4002875-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="652289bd4224a354c4002875-|49" defer=""></script></body>

</html>