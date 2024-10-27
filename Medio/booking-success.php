<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


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
 include_once'header2.php';


  ?>
<div class="content success-page-cont">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-lg-6">

<div class="card success-card">
<div class="card-body">
<div class="success-cont">
<i class="fas fa-check"></i>
<h3>Appointment booked Successfully!</h3>
<p>Appointment booked with <strong>Dr.<?php print( $_SESSION['drname']);
 $_SESSION['drname']; ?> </strong><br> on <strong><?php print( $_SESSION['date']);
 $_SESSION['date']; ?></strong></p>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="4300418645ec9cd001ddad5a-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="4300418645ec9cd001ddad5a-text/javascript"></script>

<script src="assets/js/feather.min.js" type="4300418645ec9cd001ddad5a-text/javascript"></script>

<script src="assets/js/script.js" type="4300418645ec9cd001ddad5a-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4300418645ec9cd001ddad5a-|49" defer=""></script></body>

</html>