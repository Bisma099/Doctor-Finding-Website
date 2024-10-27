<!DOCTYPE html>
<html lang="en">
  
<head>
<meta charset="utf-8">
<title>Medico</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <?php
include_once 'includes/dbh.inc.php'
?>

<link href="../html/assets/img/logo.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="terms page">

<div class="main-wrapper">
<header class="header">
<nav class="navbar navbar-expand-lg header-nav nav-transparent">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">

</span>
</a>

   <a href="index.php" class="navbar-brand logo">
        <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
        <img src="assets/img/headerlog.png" class="img-fluid" alt="Logo">
        </a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index.php" class="menu-logo">
<img src="../php/assets/img/logo.pngg" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="has-submenu">
<a href="index.php">Home <i class=""></i></a>
<ul class="submenu">
</ul>
</li>
<li class="has-submenu"><a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="index.php">Find Doctor</a></li>
</li>
</ul>
</li>

<li class="has-submenu"><a href="#">Patients <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
</li>
</li>
<li><a>Find doctor by speciality</a><li>
<li><a href="#">Neurologist</a>
</li>
<li><a href="#">Dermatologis</a>
</li>
<li><a href="#">Gynecologist</a>
</li>
<li><a href="#">Child Specialist</a>
</li>
<li><a href="#">Gastroenterologist</a>
</li>
<li><a href="#">Psychiatrist</a>
</li>
<li><a href="#">General Physician </a>
</li>
<li><a href="#">Audiologist</a>
</li>
</ul>
</li>
<li class=""><a href="specialized.php">Find doctor by Specialities <i class=""></i></a>

<li><a href="about-us.php" >About us</a>
</li>

<li class="login-link">
<a href="login.php">Login / Signup</a>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item contact-item">
<div class="header-contact-img">
<i class="far fa-hospital"></i>
</div>
<div class="header-contact-detail">
<p class="contact-header">Contact</p>
<p class="contact-info-header">+9232347889</p>
</div>
</li>
<li class="nav-item">
 <a class="nav-link header-login" href="login.php">login / Signup </a>
</li>
</ul>
</nav>
</header>




<section class="browse-section">
            <div class="container">
            <div class="section-header-three text-center aos" data-aos="fade-up">
            <h2>Browse by Specialities</h2>
            <p class="sub-title"> Specialities Available</p>
            </div>
            
               
   <div class="parent-container" style="display: flex;">
  <?php
    $sql="SELECT * FROM specials ;";
    $result=mysqli_query($conn,$sql);
    $queryresult=mysqli_num_rows($result);

    if ($queryresult>0) {
      while ($row=mysqli_fetch_assoc($result)) {
        echo("<a class='view-pro-btn' href='index4.php?error=".$row['img']."'><div class='col-lg-2 col-md-3 aos' data-aos='fade-up'>
          <div class='brower-box'>
          <div>
          <div class='brower-img'>
          <img src='admin1/upload/".$row['speciality']."' alt='' style='border-radius:10%; border:0px solid #ccc; width:70px; height:60px;'>
          </div>
          <h4>".$row['img']."</h4>
          <p><span>Show Doctors</span></p>
          </div>
          </div>
          </div></a> ");
          echo" ";
         //The search 2;
      }
    } else {
      echo(" ");
    }
  ?>
</div>

       


           <div class="view-all-more text-center aos" data-aos="fade-up">
            <a href="index.php" class="btn btn-primary">search for a doctor</a>
            </div>
            </div>
            </section>




<?php
include_once 'footer.php'
?>
            
            </div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/slick.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/aos.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/script.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="5eb0fe4df6c26d064b313edf-|49" defer=""></script></body>
</html>
