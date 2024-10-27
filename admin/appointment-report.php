<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Medico</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">




<div class="top-nav-search">
<div class="main">
<form class="search" method="post" >
<div class="s-icon"><i class="fas fa-search"></i></div>
<input type="text" class="form-control" placeholder="Start typing your Search..." />
<ul class="results">
<li>
<h6><i class="feather-calendar me-1"></i> Appointments</h6>
<p>No matched Appointment found. <a href="upcoming-appointments.html"><span>View all</span></a></p>
</li>
<li>
<h6><i class="feather-calendar me-1"></i> Specialities</h6>
<p>No matched Appointment found. <a href="specialities.html"><span>View all</span></a></p>
</li>
<li>
<h6><i class="feather-user me-1"></i> Doctors</h6>
<p>No matched Appointment found. <a href="doctor-list.html"><span>View all</span></a></p>
</li>
<li>
<h6><i class="feather-users me-1"></i> Patients</h6>
<p>No matched Appointment found. <a href="patient-list.html"><span>View all</span></a></p>
</li>
</ul>
</form>
</div>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav nav-tabs user-menu">




<li class="nav-item dropdown noti-nav">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="feather-bell"></i> <span class="badge"></span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"><i class="feather-more-vertical"></i></a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar">
 <img class="avatar-img" alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body">
<h6>Travis Tremble <span class="notification-time">18.30 PM</span></h6>
<p class="noti-details">Sent a amount of $210 for his Appointment <span class="noti-title">Dr.Ruby perin </span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar">
<img class="avatar-img" alt="" src="assets/img/profiles/avatar-05.jpg">
</span>
<div class="media-body">
<h6>Travis Tremble <span class="notification-time">12 Min Ago</span></h6>
<p class="noti-details"> has booked her appointment to <span class="noti-title">Dr. Hendry Watt</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<div class="avatar">
<img class="avatar-img" alt="" src="assets/img/profiles/avatar-03.jpg">
</div>
<div class="media-body">
<h6>Travis Tremble <span class="notification-time">6 Min Ago</span></h6>
<p class="noti-details"> Sent a amount $210 for his Appointment <span class="noti-title">Dr.Maria Dyen</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<div class="avatar avatar-sm">
<img class="avatar-img" alt="" src="assets/img/profiles/avatar-06.jpg">
</div>
<div class="media-body">
<h6>Travis Tremble <span class="notification-time">8.30 AM</span></h6>
<p class="noti-details"> Send a message to his doctor</p>
</div>
</div>
</a>
</li>
</ul>
</div>
</div>
</li>


<li class="nav-item dropdown main-drop">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img src="assets/img/profiles/avatar-01.jpg" alt="">
<span class="status online"></span>
</span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Robert Haddin</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.html"><i class="feather-user me-1"></i> My Profile</a>
<a class="dropdown-item" href="profile.html"><i class="feather-edit me-1"></i> Edit Profile</a>
<a class="dropdown-item" href="account-settings.html"><i class="feather-sliders me-1"></i> Account Settings</a>
<hr class="my-0 ms-2 me-2">
<a class="dropdown-item" href="login.html"><i class="feather-log-out me-1"></i> Logout</a>
</div>
</li>



<li class="nav-item dropdown main-drop">
<form action="logout.inc.php" method="POST">

      <button type="submit" class="btn btn-default btn-sm" style="text-decoration-color: red;">
          <span class="glyphicon glyphicon-log-out text-dange" style="text-decoration-color: red;"></span> Log out
        </button>
        <i class="fa fa-power-off"></i>
</form>
</li>




</ul>

</div>


<?php
include_once 'sidemenu.php'
?>



<div class="page-wrapper">
<div class="content container-fluid content-wrap">

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col">
<h5 class="card-title">Appointment under work (currently available in doctor account)</h5>
</div>
<div class="col-auto">
<div class="bookingrange btn btn-white btn-sm">
<div class="cal-ico">
<i class="feather-calendar mr-1"></i>
<span>Select Date</span>
</div>
<div class="ico">
<i class="fas fa-chevron-left"></i>
<i class="fas fa-chevron-right"></i>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="sales_chart"></div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">
<div class="app-listing">
<div class="multipleSelection">
<div class="selectBox">
<p class="mb-0"><i class="feather-filter me-1"></i> Filter</p>
<span class="down-icon"><i class="feather-chevron-down"></i></span>
</div>
<div id="checkBoxes">
<form >
<div class="form-custom">
<input type="text" class="form-control bg-grey" placeholder="Search by Patient">
<i class="fas fa-search"></i>
</div>
<div class="form-custom">
<input type="text" class="form-control bg-grey" placeholder="Search by Doctor">
<i class="fas fa-search"></i>
</div>
<p class="lab-title">Consultation Type</p>
<label class="custom_check w-100">
<input type="checkbox" name="year">
<span class="checkmark"></span> Video Call
</label>
<label class="custom_check w-100">
<input type="checkbox" name="year">
<span class="checkmark"></span> Audio Call
</label>
<label class="custom_check w-100">
<input type="checkbox" name="year">
<span class="checkmark"></span> Chat
</label>
<button type="submit" class="btn w-100 btn-primary">Apply</button>
</form>
</div>
 </div>
<div class="custom-list">
<div class="SortBy">
<div class="selectBoxes order-by">
<p class="mb-0"><img src="assets/img/icon/sort.png" class="me-2" alt="icon"> Order by </p>
<span class="down-icon"><i class="feather-chevron-down"></i></span>
</div>
<div id="checkBox">
<form >
<p class="lab-title">Order By </p>
<label class="custom_radio w-100">
<input type="radio" name="order">
<span class="checkmark"></span> ID
</label>
<label class="custom_radio w-100">
<input type="radio" name="order">
<span class="checkmark"></span> Amount
</label>
<label class="custom_radio w-100">
<input type="radio" name="order">
<span class="checkmark"></span> Date
</label>
<p class="lab-title">Sort By</p>
<label class="custom_radio w-100">
<input type="radio" name="sort">
<span class="checkmark"></span> Ascending
</label>
<label class="custom_radio w-100">
<input type="radio" name="sort">
<span class="checkmark"></span> Descending
</label>
<button type="submit" class="btn w-100 btn-primary">Apply</button>
</form>
</div>
</div>
</div>
<div class="import-list">
<a href="#"><i class="feather-download"></i> Import</a>
</div>
</div>
<div class="card">
<div class="card-body p-0">
<div class="table-responsive">
<table class="datatable table table-borderless hover-table" id="data-tables">
<thead class="thead-light">
<tr>
<th>ID</th>
<th>Patient</th>
<th>Doctor</th>
<th>Disease</th>
<th>Consultation type</th>
<th>Date & Time</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td>#4546</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar avatar-img" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
<a href="profile.html"><span class="user-name">Bess Twishes</span> <span class="text-muted">Male, 40 Years Old</span></a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a class="avatar-pos" href="#"><img class="avatar avatar-img" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
<a href="profile.html" class="user-name"><span class="text-muted">Dr. Rayan</span> <span class="tab-subtext">Gyanoclogist</span></a>
</h2>
</td>
<td><span class="disease-name">Allergies & Asthma</span></td>
<td class="status">
<span>Scheduled Appointment</span>
<a href="#" class="d-block text-primary mt-2">
<span class="d-flex align-items-center"><i class="feather-video me-2"></i> Video call</span>
</a>
</td>
<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
<td>$300.00</td>
</tr>
<tr>
<td>#8774</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar avatar-img" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
<a href="profile.html"><span class="user-name">Bess Twishes</span> <span class="text-muted">Female,30 Years Old</span></a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a class="avatar-pos" href="#"><img class="avatar avatar-img" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
<a href="profile.html" class="user-name"><span class="text-muted">Dr. Monroe</span> <span class="tab-subtext">Hair Specialities</span></a>
</h2>
</td>
<td><span class="disease-name">Sleep Problem</span></td>
<td class="status">
<span>Scheduled Appointment</span>
<a href="#" class="d-block text-primary mt-2">
<span class="d-flex align-items-center"><i class="feather-mic me-2"></i> Audio call</span>
</a>
</td>
<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
<td>$300.00</td>
</tr>
<tr>
<td>#4546</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar avatar-img" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
<a href="profile.html"><span class="user-name">Abdul Aziz Lazis</span> <span class="text-muted">Male, 25 Years Old</span></a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a class="avatar-pos" href="#"><img class="avatar avatar-img" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
<a href="profile.html" class="user-name"><span class="text-muted">Dr. Lester</span> <span class="tab-subtext">Orthopaedics</span></a>
</h2>
</td>
<td><span class="disease-name">Tooth Pain</span></td>
<td class="status">
<span>Scheduled Appointment</span>
<a href="#" class="d-block text-primary mt-2">
<span class="d-flex align-items-center"><i class="feather-message-square me-2"></i> Chat</span>
</a>
</td>
<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
<td>$300.00</td>
</tr>
<tr>
<td>#4546</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar avatar-img" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
<a href="profile.html"><span class="user-name">Alex Siauw</span> <span class="text-muted">Male, 29 Years Old</span></a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a class="empty-user" href="profile.html"><i class="feather-user"></i> </a>
<a href="profile.html" class="user-name"><span class="text-muted">Dr. Clint</span> <span class="tab-subtext">Neurology</span></a>
</h2>
</td>
<td><span class="disease-name">Pain on knee</span></td>
<td class="status">
<span>Scheduled Appointment</span>
<a href="#" class="d-block text-primary mt-2">
<span class="d-flex align-items-center"><i class="feather-mic me-2"></i> Audio Call</span>
</a>
</td>
<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
<td>$300.00</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div id="tablepagination" class="dataTables_wrapper"></div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>
<script src="assets/plugins/apexchart/chart-data.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>

<script src="assets/js/moment.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>
<script src="assets/plugins/datatables/datatables.min.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>

<script src="assets/js/script.js" type="2019d31839fc79bf25b0fdd5-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2019d31839fc79bf25b0fdd5-|49" defer=""></script></body>


</html>