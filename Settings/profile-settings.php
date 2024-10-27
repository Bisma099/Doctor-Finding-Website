<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


  ?>
<head>
<meta charset="utf-8">
<title>Doccure</title>
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
 include_once'header2.php';


  ?>





<div class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
<div class="profile-sidebar">
<div class="widget-profile pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-doc-img">
<img src="assets/img/patients/patient.jpg" alt="User Image">
</a>
<div class="profile-det-info">
<h3><?php  
print( $_SESSION['username']);
 $_SESSION['username'];
?></h3>
<div class="patient-details">
<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
</div>
</div>
</div>
</div>
<div class="dashboard-widget">
<nav class="dashboard-menu">
<ul>
<li>
<a href="patient-dashboard.html">
<i class="fas fa-columns"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="favourites.html">
<i class="fas fa-bookmark"></i>
<span>Favourites</span>
</a>
</li>
<li>
<a href="dependent.html">
<i class="fas fa-users"></i>
<span>Dependent</span>
</a>
</li>
<li>
<a href="chat.html">
<i class="fas fa-comments"></i>
<span>Message</span>
<small class="unread-msg">23</small>
</a>
</li>
<li>
<a href="patient-accounts.html">
<i class="fas fa-file-invoice-dollar"></i>
<span>Accounts</span>
</a>
</li>
<li>
<a href="orders-list.html">
<i class="fas fa-list-alt"></i>
<span>Orders</span>
<small class="unread-msg">7</small>
</a>
</li>
<li>
<a href="medical-records.html">
<i class="fas fa-clipboard"></i>
<span>Add Medical Records</span>
</a>
</li>
<li>
<a href="medical-details.html">
<i class="fas fa-file-medical-alt"></i>
<span>Medical Details</span>
</a>
</li>
<li class="active">
<a href="profile-settings.html">
<i class="fas fa-user-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="change-password.html">
<i class="fas fa-lock"></i>
<span>Change Password</span>
</a>
</li>
<li>
<a href="index-2.html">
<i class="fas fa-sign-out-alt"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
</div>

<div class="col-md-7 col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">

<form>
<div class="row form-row">
<div class="col-12 col-md-12">
<div class="form-group">
<div class="change-avatar">
<div class="profile-img">
<img src="assets/img/patients/patient.jpg" alt="User Image">
</div>
<div class="upload-img">
<div class="change-photo-btn">
<span><i class="fa fa-upload"></i> Upload Photo</span>
<input type="file" class="upload">
</div>
<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" value="Richard">
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" value="Wilson">
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>Date of Birth</label>
<div class="cal-icon">
<input type="text" class="form-control datetimepicker" value="24-07-1983">
</div>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>Blood Group</label>
<select class="form-select form-control">
<option>A-</option>
<option>A+</option>
<option>B-</option>
<option>B+</option>
<option>AB-</option>
<option>AB+</option>
<option>O-</option>
<option>O+</option>
</select>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>Email ID</label>
<input type="email" class="form-control" value="richard@example.com">
<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>Mobile</label>
<input type="text" value="+1 202-555-0125" class="form-control">

</div>
</div>
<div class="col-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" value="806 Twin Willow Lane">
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control" value="Old Forge">
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>State</label>
<input type="text" class="form-control" value="Newyork">
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>Zip Code</label>
<input type="text" class="form-control" value="13420">
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>Country</label>
<input type="text" class="form-control" value="United States">
</div>
</div>
</div>
<div class="submit-section">
<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
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