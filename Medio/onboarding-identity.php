<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Onboarding Identity</title>

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="onboard-wrapper">
<div class="left-panel">
<div class="onboarding-logo text-center">
<a href="index-2.html"><img src="assets/img/onboard-img/onb-logo.png" class="img-fluid" alt=""></a>
</div>
<div class="onboard-img">
<img src="assets/img/onboard-img/onb-slide-img.png" class="img-fluid" alt="">
</div>
<div class="onboarding-slider">

<div id="onboard-slider" class="owl-carousel owl-theme onboard-slider slider">

<div class="onboard-item text-center">
<div class="onboard-content">
<h3>Welcome to Doccure</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
</p>
</div>
</div>


<div class="onboard-item text-center">
<div class="onboard-content">
<h3>Welcome to Doccure</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
</p>
</div>
</div>


<div class="onboard-item text-center">
<div class="onboard-content">
<h3>Welcome to Doccure</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
</p>
</div>
</div>

</div>

</div>
</div>
<div class="right-panel">
<div class="container">
<div class="row">
<div class="col-lg-12 p-0">
<div class="right-panel-title text-center">
<a href="index-2.html"> <img src="assets/img/onboard-img/onb-logo.png" alt=""></a>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="on-board-wizard">
<ul>
 <li>
<a href="onboarding-email.html">
<div class="onboarding-progress active">
<span>1</span>
</div>
<div class="onboarding-list">
<h6>Registration</h6>
<p>Enter Details for Register </p>
</div>
</a>
</li>
<li>
<a href="onboarding-identity.html">
<div class="onboarding-progress active">
<span>2</span>
</div>
<div class="onboarding-list">
<h6>Upload Identity</h6>
<p>Upload your Identity for Verification</p>
</div>
</a>
</li>
<li>
<a href="onboarding-personalize.html">
<div class="onboarding-progress">
<span>3</span>
</div>
<div class="onboarding-list">
<h6>Personal Details</h6>
<p>Enter your Personal Details</p>
</div>
</a>
</li>
<li>
<a href="onboarding-verification.html">
<div class="onboarding-progress">
<span>4</span>
</div>
<div class="onboarding-list">
<h6>Doctor Verification</h6>
<p>Upload Documents for the Verification</p>
</div>
</a>
</li>
<li>
<a href="onboarding-payments.html">
<div class="onboarding-progress">
<span>5</span>
</div>
<div class="onboarding-list">
<h6>Payment details</h6>
<p>Setup Your Payment Details</p>
</div>
</a>
</li>
<li>
<a href="onboarding-preferences.html">
<div class="onboarding-progress">
<span>6</span>
</div>
<div class="onboarding-list">
<h6>Preferences</h6>
<p>Setup Your Preferences for your Account</p>
</div>
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div class="onboarding-content-box">
<div class="onboarding-title">
<h2>Upload identification<span>*</span></h2>
<h6>We need to determine if an identity document is authentic and belongs to you. You
just need to go through some steps which will help us to build a secure system
together</h6>
</div>
<div class="onboarding-content passcode-wrap mail-box">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<select class="select">
<option selected disabled>Select Document Type</option>
<option>PDF</option>
<option>TXT</option>
<option>JPEC</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" placeholder="Enter Document Number" class="form-control placeholder-style" required="">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<div class="call-option file-option ">
<input type="file" id="radio1" name="selector" class="option-radio">
<label for="radio1" class="call-lable verify-lable verify-file"> <img src="assets/img/icons/file.png" alt="">Upload Document</label>
</div>
</div>
</div>
</div>
</div>
<div class="onboarding-btn Personalize-btn">
<a href="#" data-bs-toggle="modal" data-bs-target="#id-verified">Continue</a>
</div>

<div class="modal fade fade-custom" id="id-verified" tabindex="-1" aria-hidden="true">
<div class="modal-dialog id-upload modal-dialog-centered">
<div class="modal-content id-pop-content">
<div class="modal-header id-pop-header justify-content-center">
<img src="assets/img/icons/success-tick.svg" alt="">
</div>
<div class="modal-body id-pop-body text-center">
<h2>Your ID uploaded Successfully</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<div class="modal-footer id-pop-footer text-center">
<div class="onboarding-btn pop-btn ">
<a href="onboarding-personalize.html">Continue</a>
</div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="assets/js/bootstrap.bundle.min.js" type="0280cf563d11f2cb816f659b-text/javascript"></script>

<script src="assets/js/jquery-3.6.0.min.js" type="0280cf563d11f2cb816f659b-text/javascript"></script>

<script src="assets/js/feather.min.js" type="0280cf563d11f2cb816f659b-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="0280cf563d11f2cb816f659b-text/javascript"></script>

<script src="assets/js/owl.carousel.min.js" type="0280cf563d11f2cb816f659b-text/javascript"></script>

<script src="assets/js/script.js" type="0280cf563d11f2cb816f659b-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0280cf563d11f2cb816f659b-|49" defer=""></script></body>
</html>