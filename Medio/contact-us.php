<!DOCTYPE html>
<html lang="en">
<?php
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

<header class="header">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="index-2.html" class="navbar-brand logo">
<img src="assets/img/favicon.jpg.png" class="img-fluid" alt="Logo">
<img src="assets/img/headerlog.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index-2.html" class="menu-logo">
<img src="assets/img/favicon.jpg.png" class="img-fluid" alt="Logo">
</a>

</div>

</li>


</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item contact-item">
<div class="header-contact-img">
</div>
<div class="header-contact-detail">
</div>
</li>
<li class="nav-item">
 <a class="nav-link header-login" href="login.php">login / Signup </a>
</li>
</ul>
</nav>
</header>





<section class="contact-section">
<div class="container">
<div class="row mb-5">
<div class="col-md-12 text-center">
<h3 class="mb-4">Contact Us</h3>
<p>Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
</div>
</div>
<div class="row">
<div class="col-md-4 d-flex">
<div class="contact-box flex-fill">
<div class="infor-img">
<div class="image-circle">
<i class="feather-phone"></i>
</div>
</div>
<div class="infor-details text-center">
<label>Phone Number</label>
<p><?php



$sql="SELECT * FROM cms ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("".$row['contact']."");
          echo" ";
         //The search 2;
}


}
else{
    echo("no address available");
          
}



 




                              ?></p>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="contact-box flex-fill">
<div class="infor-img">
<div class="image-circle bg-primary">
<i class="feather-mail"></i>
</div>
</div>
<div class="infor-details text-center">
<label>Email</label>
<p><a href="" data-cfemail="294a46475d484a5d694c51484459454c074a4644"><?php



$sql="SELECT * FROM cms ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("".$row['email']."");
          echo" ";
         //The search 2;
}


}
else{
    echo("no email available");
          
}



 




                              ?></a></p>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="contact-box flex-fill">
<div class="infor-img">
<div class="image-circle">
<i class="feather-map-pin"></i>
</div>
</div>
<div class="infor-details text-center">
<label>Location</label>
<p><?php



$sql="SELECT * FROM cms ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("".$row['address']."");
          echo" ";
         //The search 2;
}


}
else{
    echo("no address available");
          
}



 




                              ?></p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="contact-form">
<div class="container">
<div class="section-header text-center">
	  <?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="requested") {
                            
                              echo "<h1>your contact request has been sent</h1>";
                          }
                            
                          
                            
                           
                      }


                          ?>
<h2>Get in touch!</h2>
</div>
<div class="row">
<div class="col-md-12">
<form action="includes/contactus.php" method="POST">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Your Name <span>*</span></label>
<input name="name" type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Your Email <span>*</span></label>
<input name="email" type="email" class="form-control">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Subject</label>
<input type="text" name="subject" class="form-control">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Comments <span>* 255 character long</span></label>
<textarea name="comment" class="form-control" >

											</textarea>
</div>
</div>
</div>
<button type="submit" name="submit" class="btn bg-primary">Send Message</button>
</form>
</div>
</div>
</div>
</section>


<section class="contact-map d-flex">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115348.29623011875!2d68.36690614999999!3d25.3835715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70f6d444f3c3%3A0xc00bbc183d41e285!2sHyderabad%2C%20Sindh!5e0!3m2!1sen!2s!4v1671576114061!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="7712ce7a349edc7f770ee5ca-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="7712ce7a349edc7f770ee5ca-text/javascript"></script>

<script src="assets/js/feather.min.js" type="7712ce7a349edc7f770ee5ca-text/javascript"></script>

<script src="assets/js/script.js" type="7712ce7a349edc7f770ee5ca-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7712ce7a349edc7f770ee5ca-|49" defer=""></script></body>

</html>