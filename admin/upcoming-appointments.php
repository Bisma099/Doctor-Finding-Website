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

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<style>
  .avatar-img {
  transition: all 0.2s ease-in-out;
}

.avatar-img:hover {
  transform: scale(5.1);
}


</style>
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">

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
<span class="status online"></span>
</span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
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
<div class="content container-fluid">




<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header border-bottom-0">
<div class="row align-items-center">
<div class="col">
<h5 class="card-title">Appointments</h5>
</div>
<div class="col-auto d-flex flex-wrap">
<div class="form-custom me-2">
<div id="tableSearch" class="dataTables_wrapper"></div>
</div>

</div>
</div>
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
<div id="tablepagination" class="dataTables_wrapper"></div>
</div>
</div>

</div>
</div>

</div>

</div>
</div>

</div>




<script src="assets/js/jquery-3.6.0.min.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>
<script src="assets/plugins/datatables/datatables.min.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>

<script src="assets/js/moment.min.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>

<script src="assets/js/script.js" type="104adcbadb73fe05c451cd80-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="104adcbadb73fe05c451cd80-|49" defer=""></script></body>
s
</html>