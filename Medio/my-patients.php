<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


  ?> <?php
include_once 'includes/dbh.inc.php'
?>


<head>
<meta charset="utf-8">
<title>medicos</title>
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
<div class="row row-grid">










<?php



$search=mysqli_real_escape_string($conn,$_SESSION['id']);

$sql="SELECT * FROM bookedapt WHERE drid LIKE '$search%'  ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<div class='col-md-6 col-lg-4 col-xl-3'>
<div class='card widget-profile pat-widget-profile'>
<div class='card-body'>
<div class='pro-widget-content'>
<div class='profile-info-widget'>
<a href='#' class='booking-doc-img'>
<img src='admin1/upload/".$row['profile']."' alt='User Image'>
</a>
<div class='profile-det-info'>
<h3>".$row['pname']."</h3>
<div class='patient-details'>
<h5><b>Patient ID :</b>".$row['pid']."</h5>
<h5 class='mb-0'><i class='fas fa-map-marker-alt'></i>".$row['paddress']."</h5>
</div>
</div>
</div>
</div>
<div class='patient-info'>
<ul>
<li>Phone <span>".$row['pnumber']."</span></li>
<li>date of birth: <span>".$row['pdob'].",".$row['pgender']."</span></li>

</ul>
</div>
</div>
</div>
</div>");
         
          echo" ";
         //The search 2;
}


}
else{
    echo("no doctor available");
          
}



 




                              ?>



</div>
</div>
</div>
</div>
</div>


<?php
 include_once'footer.php';


  ?>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="5aa76dbd41a7096ea98b007e-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="5aa76dbd41a7096ea98b007e-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="5aa76dbd41a7096ea98b007e-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="5aa76dbd41a7096ea98b007e-text/javascript"></script>

<script src="assets/js/feather.min.js" type="5aa76dbd41a7096ea98b007e-text/javascript"></script>

<script src="assets/js/script.js" type="5aa76dbd41a7096ea98b007e-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="5aa76dbd41a7096ea98b007e-|49" defer=""></script></body>

</html>