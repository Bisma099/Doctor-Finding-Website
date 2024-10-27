<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<?php
 include_once'header.php';


  ?>

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.min.css">

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

<div class="col-md-7 col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">


<div class="row form-row">
<div class="col-12 col-md-12">
<div class="form-group">
<div class="change-avatar">
<div class="profile-img">

</div>
<form action="uploads.php" method="POST" enctype="multipart/form-data">
<div class="upload-img">
<div class="change-photo-btn">
<span><i class="fa fa-upload"></i> Upload Photo</span>
<input type="file" name="file" class="upload">
</div>
<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
<button class="btn btn-primary submit-btn" type="submit" name="submit">upload</button>

</div></form>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 left-margin">
<div class="form-group">
<a href="drusername.php"><label> Name</label></a>
</div>
</div>
<div class="col-12 col-md-6 left-margin">

</div>


<div class="form-group left-margin">
<a href="doctor-specialization.php"><label>Education/specialization </label></a>

</div>

<div class="col-12 col-md-6 left-margin">
<div class="form-group">
<a href="drnewemail.php"><label>Email ID/Mobile</label>

</a>

</div>
</div>
<div class="col-12 col-md-6 left-margin">
<div class="form-group">

</div>
</div>
<div class="col-12 left-margin">
<div class="form-group">

<a href="drAddress.php">
<label>Address</label>
</a>
</div>
</div>

<div class="col-12 left-margin">
<div class="form-group">

<a href="license.php">
<label>license/designation</label>
</a>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/feather.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/dropzone/dropzone.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/profile-settings.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/script.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ec3053ffb74f1b8f3edcafe4-|49" defer=""></script></body>

</html>