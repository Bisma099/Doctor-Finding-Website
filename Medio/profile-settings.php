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

<link rel="stylesheet" href="assets/css/style.css">
<style>
.left-margin {
    margin-left: 20px;
}
</style>
</head>
<body>

<div class="main-wrapper">

<?php
 include_once'header2.php';


  ?>





<div class="content">
<div class="container-fluid">
<div class="row">

<?php
 include_once'psidebar.php';


  ?>

<div class="col-md-7 col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">

<form action="upload.php" method="POST" enctype="multipart/form-data">
<div class="row form-row">
<div class="col-12 col-md-12">
<div class="form-group">
<div class="change-avatar">
<div class="profile-img">
</div>
<div class="upload-img">
<div class="change-photo-btn">
<span><i class="fa fa-upload"></i> select profile Photo</span>
<input type="file" name="file" class="upload">

</div>
<small class="form-text text-muted">Allowed JPG, PNG. Max size of 2MB</small>
<button class="btn btn-primary submit-btn" type="submit" name="submit">upload</button>
</form>

</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 left-margin">
<div class="form-group">
<a href="username.php"><label> Name</label></a>
</div>
</div>
<div class="col-12 col-md-6 left-margin">

</div>


<div class="form-group left-margin">

<a href="health.php"><label>Health </label></a>

</div>

<div class="col-12 col-md-6 left-margin">
<div class="form-group">
<a href="newemail.php"><label>Email ID/Mobile</label>

</a>

</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">

</div>
</div>
<div class="col-12 left-margin">
<div class="form-group">

<a href="Address.php">
<label>Address</label>
</a>
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