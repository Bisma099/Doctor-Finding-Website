<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>medicos</title>
 <?php
include_once 'includes/dbh.inc.php'
?>
<link rel="shortcut icon" href="assets/img/favicon.jpg.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.min.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/footerlogo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">

</a>
<a href="javascript:void(0);" id="toggle_btn">
<i class="feather-chevrons-left"></i>
</a>
</div>


<div class="top-nav-search">
<div class="main">
<form class="search" method="post" >
<div class="s-icon"><i class="fas fa-search"></i></div>
<input type="text" class="form-control" placeholder="Start typing your Search..." />
<ul class="results">
<li>
<h6><i class="feather-calendar me-1"></i> Appointments</h6>
<p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
</li>
<li>
<h6><i class="feather-calendar me-1"></i> Specialities</h6>
<p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
</li>
<li>
<h6><i class="feather-user me-1"></i> Doctors</h6>
<p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
</li>
<li>
<h6><i class="feather-users me-1"></i> Patients</h6>
<p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
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
<div class="content container-fluid pb-0">
<h4 class="mb-3">Overview</h4>
<div class="row">
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-primary">
<i class="feather-user-plus"></i>
</span>
<div class="dash-count">
<h5 class="dash-title">Doctors</h5>
<div class="dash-counts">
<p><?php



$sql="select count(*) as id from doctor";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
echo $data['id'];

?></p>
</div>
</div>
</div>
<p class="trade-level mb-0"><span class="text-danger me-1"><i class="fas fa-caret-down me-1"></i>1.15%</span> last week</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-blue">
<i class="feather-users"></i>
</span>
<div class="dash-count">
<h5 class="dash-title">Patients</h5>
<div class="dash-counts">
<p><?php




$sql="select count(*) as id from patient";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
echo $data['id'];

?></p>
</div>
</div>
</div>
<p class="trade-level mb-0"><span class="text-success me-1"><i class="fas fa-caret-up me-1"></i>4.5%</span> last week</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-warning">
<img src="assets/img/icon/calendar.png" alt="User Image">
</span>
<div class="dash-count">
<h5 class="dash-title">Appointment</h5>
<div class="dash-counts">
<p><?php


$sql="select count(*) as id from bookedapt";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
echo $data['id'];

?></p>
</div>
</div>
</div>
<p class="trade-level mb-0"><span class="text-success me-1"><i class="fas fa-caret-up me-1"></i>9.65%</span> last week</p>
</div>
</div>
</div>

</div>
<div class="row">

<div style="width: 100%;" class="col-xl-7 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col">
<h5 class="card-title">Appointments</h5>
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="datatable table table-borderless hover-table" id="data-table">
<thead class="thead-light">
<tr>
<th>ID</th>
<th>doctor</th>
<th>patient</th>
<th>date</th>
<th>status</th>
<th></th>
</tr>
</thead>
<tbody>
   <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicos";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build the SQL query to fetch appointments based on upcoming dates
$today = date('Y-m-d'); // Get today's date in YYYY-MM-DD format
$query = "SELECT * FROM bookedapt WHERE dated <= '$today' ORDER BY dated ASC";

// Execute the query and check for errors
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Error fetching appointments: " . mysqli_error($conn));
}

// Loop through the results and display them in a table
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>#".$row['id']."</td>
            <td>
                <h2 class='table-avatar'>
                    <a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'>
                        <img class='avatar avatar-img' src='uploads/".$row['dprofile']."' alt='User Image'>
                    </a>
                    <a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'>
                        <span class='user-name'>".$row['drname']."</span>
                    </a>
                </h2>
            </td>
              <td>
                 <h2 class='table-avatar'>
                    <a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'>
                        <img class='avatar avatar-img' src='upload/".$row['profile']."' alt='User Image'>
                    </a>
                    <a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'>
                        <span class='user-name'>".$row['pname']."</span>
                    </a>
                </h2>


            </td> 
              <td>
                <p>".$row['dated']."</p>
            </td>
            <td>
                <p>".$row['status']."</p>
            </td>
            <td>
                
            </td>
        </tr>";
    }
} else {
    echo "No appointments available.";
}

// Close the database connection
mysqli_close($conn);
?>






</tbody>
</table>

</div>

 <script>
   
      
      function showPopup() {
      if (confirm("are you sure you want to delete doctor")) {
        return true;  // User clicked "OK", so proceed to new page
      } else {
        return false;  // User clicked "Cancel", so stay on current page
      }
    }
  </script>
</div>
</div>
</div>

</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/js/feather.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>
<script src="assets/plugins/apexchart/chart-data.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/js/moment.min.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>

<script src="assets/js/script.js" type="911aafc5ec50e6c20ab43f2b-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="911aafc5ec50e6c20ab43f2b-|49" defer=""></script></body>

</html>