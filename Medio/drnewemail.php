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

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
<div class="card">
<div class="card-body">


<div class="row form-row">
<div class="col-12 col-md-12">
<div class="form-group">
<div class="change-avatar">
<div class="profile-img">
</div>

</div>
</div>
</div>


<div class="col-12 col-md-6">
<div class="form-group">
    <form action="includes/drsettings.inc.php" method="POST">
<label>Email ID</label>
<input name="email" type="email" class="form-control" placeholder="<?php  
print( $_SESSION['email']);

?>" value="">
<br>
<div class="submit-section">

<button type="submit" name="submit" class="btn btn-primary submit-btn">Save Changes</button></div>
</form>
</div>
</div>
<div class="col-12 col-md-6">

</div>



<div class="col-12 col-md-6">
<div class="form-group">
 <form action="includes/settings.inc.php" method="POST">
<label>Mobile</label>
<input name="numbers" type="number" class="form-control" placeholder="<?php  
print( $_SESSION['numbers']);

?>" value="">


</div>
</div>
</div>
<div class="submit-section">
<button type="submit" name="submit" class="btn btn-primary submit-btn">Save Changes</button>
</div>
</form>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>

<script src="assets/js/moment.min.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>

<script src="assets/js/feather.min.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>

<script src="assets/js/script.js" type="1c705ee8b6c63c24a5bf2433-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1c705ee8b6c63c24a5bf2433-|49" defer=""></script></body>

</html>