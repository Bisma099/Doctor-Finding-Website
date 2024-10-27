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





<div class="content">
<div class="container-fluid">
<div class="row">
<?php
 include_once'psidebar.php';


  ?>
<div class="col-md-7 col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12 col-lg-6" >
  <?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="registered") {
                            
                              echo "<h1 class='text-success'>Deposit requested succesfully </h1>";
                          }
                            
                         
                             
                           
                      }


                          ?>


<div class="form-group">
<label>Acc:</label>

</div>
<form action="files2.php" method="POST" enctype="multipart/form-data">
<div class="change-photo-btn">
<span><i class="fa fa-upload"></i> Upload screenshot(optional)</span>
<input type="file" name="file" class="upload">
</div><br>
<div class="form-group">
<label>date of transaction</label>
<input name="date" type="date" class="form-control">
</div>
<div class="form-group">
<label>Amount</label>
<input name="amount"  type="text" class="form-control">
</div>
<div class="form-group">
<label>trid</label>
<input name="trid"  type="text" class="form-control">
</div>
<div class="submit-section">
<button type="submit" name="submit" class="btn btn-primary submit-btn">submit</button>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/js/feather.min.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/js/script.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="f9734eea5d120d96a40e9a8e-|49" defer=""></script></body>

</html>