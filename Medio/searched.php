<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


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

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div style="height: 100%" class="main-wrapper">

<?php
 include_once'header2.php';


  ?>




<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">



</div>
<div class="col-md-12 col-lg-8 col-xl-9">

      <?php
include_once 'includes/dbh.inc.php'
?>






                  <?php

if (isset($_POST['special'])) {

$search=mysqli_real_escape_string($conn,$_POST['special']);
$searched=mysqli_real_escape_string($conn,$_POST['gender']);
$_SESSION['special']=$search;
$_SESSION['gender']=$searched;
$sql="SELECT * FROM apttime WHERE special LIKE '$search%' OR gender LIKE '$search%'  limit 4;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
if (empty($searched)) {
$queryresult=0;
if ($queryresult=0) {
    
         echo("no doctor available");
          
}

}
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<div class='card'>
<div class='card-body'>
<div class='doctor-widget'>
<div class='doc-info-left'>
<div class='doctor-img'>
<a href='doctor-profile.html'>
<img src='uploads/". $row['profile']."' class='img-fluid' alt='User Image'>
</a>
</div>
<div class='doc-info-cont'>
<h4 class='doc-name'><a href='doctor-profile.html'>". $row['drname']."</a></h4>
<p class='doc-speciality'>". $row['special']."</p>
<h5 class='doc-department'>". $row['degree']."</h5>

<div class='clinic-details'>

</div>
<div class='clinic-services'>
<span>". $row['service']."</span>
</div>
</div>
</div>
<div class='doc-info-right'>
<div class='clini-infos'>
<ul>
<li><i class='far fa-thumbs-up'></i> 100%</li>
<li><i class='far fa-comment'></i> 35 Feedback</li>
<li><i class='far fa-money-bill-alt'>". $row['fees']."</i></li>
<li><i class='fas fa-map-marker-alt'></i>". $row['address']."</li>
</ul>
</div>
<div class='clinic-booking'>
<a class='view-pro-btn' href='doctor-profile.php?title=".$row['drid']."'>View Profile</a>
<a class='apt-btn' href='booking.php?title=".$row['id']."'>Book Appointment</a>
</div>
</div>
</div>
</div>
</div>");
          
         //The search 2;
}


}
else{
    echo("<h1>404 no doctor available</h1>");
          
}


}
 

else{
       header("location:../search.php?error=nofound");
          
}



                              ?>
</div>







</div>
</div>
</div>
</div>
</div><div style=' height: 80%;background-color: auto'>  </div>
<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="27342a20d530600749cfb85f-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/moment.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/plugins/fancybox/jquery.fancybox.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/feather.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/script.js" type="27342a20d530600749cfb85f-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="27342a20d530600749cfb85f-|49" defer=""></script></body>

</html>