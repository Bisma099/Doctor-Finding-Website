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

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/plugins/apex/apexcharts.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<?php
 include_once'header3.php';

if (isset($_GET["error"]) && $_GET["error"] == "registered") {
  echo "<script>alert('license information added');</script>";
}

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
<div class="row">
<div class="col-md-12 col-lg-6">
    <?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="passchanged") {
                            
                              echo "<h1 style='text-decoration-color: lightgreen;'>password change succesful </h1>";
                          }
                            if ($_GET["error"]=="passwordsdontmatch") {
                            
                              echo "<h1>Passwords dont match </h1>";
                          }
                         
                             
                           
                      }


                          ?>
                          <form >
<div class="upload-img">



<small class="form-text text-muted">Delete previous license entry</small>
<button class="btn btn-primary submit-btn" type="submit" name="submit">delete</button>
<br>
</div></form><br>
 
<form action="files1.php" method="POST" enctype="multipart/form-data">

<div class="change-photo-btn">
<span><i class="fa fa-upload"></i> Upload license</span>
<input type="file" name="file" class="upload">
</div><br>
<div class="form-group">
<label>license id</label>
<input type="text" name="lid" class="form-control">
</div>
<div class="form-group">
<label>practicing since</label>
<input type="date" name="ps" max="<?php echo date('Y-m-d'); ?>" class="form-control">
</div>
<div class="form-group">
<label>license issuance</label>
<input type="date" max="<?php echo date('Y-m-d'); ?>" name="lisd" class="form-control">
</div>
<div class="form-group">
<label>practicing location</label>
<input type="text" name="plo" class="form-control">
</div>
<div class="form-group">
<label>counseling fee</label>
<input type="text" name="cf" class="form-control">
</div>
<div class="form-group">
<label>language spoken</label>
<input type="text" name="ls" class="form-control">
</div>
<div class="form-group">
<label>business days(i.e weekly)</label>
<input type="text" name="bd" class="form-control">
</div>
<div class="form-group">
<label>time (i.e daily)</label>
<input type="text" name="daily" class="form-control">
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
</div>
</div>



<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/js/feather.min.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/js/script.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="97d544444ecf5f13e8a9aa50-|49" defer=""></script></body>

</html>