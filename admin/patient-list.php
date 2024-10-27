<!DOCTYPE html>
<html lang="en">
<?php
include_once 'includes/dbh.inc.php'
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Medico </title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
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

<div class="page-header">
<div class="row align-items-center">
<div class="col-md-12 d-flex justify-content-end">
<div class="doc-badge me-3">Total Patients </div>
<div class="SortBy">
<div class="selectBoxes order-by">
<p class="mb-0"><img src="assets/img/icon/sort.png" class="me-2" alt="icon"> Order by </p>
<span class="down-icon"><i class="feather-chevron-down"></i></span>
</div>
<div id="checkBox">
<form >
<p class="lab-title">Specialities</p>
<label class="custom_radio w-100">
<input type="radio" name="year">
<span class="checkmark"></span> Number of Appointment
</label>
<label class="custom_radio w-100">
<input type="radio" name="year">
<span class="checkmark"></span> Total Income
</label>
<label class="custom_radio w-100 mb-4">
<input type="radio" name="year">
<span class="checkmark"></span> Ratings
</label>
<p class="lab-title">Sort By</p>
<label class="custom_radio w-100">
<input type="radio" name="sort">
<span class="checkmark"></span> Ascending
</label>
<label class="custom_radio w-100 mb-4">
<input type="radio" name="sort">
<span class="checkmark"></span> Descending
</label>
<button type="submit" class="btn w-100 btn-primary">Apply</button>
</form>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col">
<h5 class="card-title">Patients</h5>
</div>
<div class="col-auto custom-list d-flex">
<div class="form-custom me-2">
<div id="tableSearch" class="dataTables_wrapper"></div>
</div>
<div class="multipleSelection">
<div class="selectBox">
<p class="mb-0"><i class="feather-filter me-1"></i> Filter </p>
<span class="down-icon"><i class="feather-chevron-down"></i></span>
</div>
<div id="checkBoxes">
<form >
<p class="lab-title">By Account status</p>
<div class="selectBox-cont">
<label class="custom_check w-100">
<input type="checkbox" name="acc" checked>
<span class="checkmark"></span> Enabled
</label>
<label class="custom_check w-100">
<input type="checkbox" name="acc">
<span class="checkmark"></span> Disabled
</label>
<p class="lab-title">By Blood Type</p>
<label class="custom_check w-100">
<input type="checkbox" name="year">
<span class="checkmark"></span> AB+
</label>
<label class="custom_check w-100">
<input type="checkbox" name="year">
<span class="checkmark"></span> O-
</label>
<label class="custom_check w-100">
<input type="checkbox" name="year">
<span class="checkmark"></span> B-
</label>
<label class="custom_check w-100">
<input type="checkbox" name="year">
<span class="checkmark"></span> A+
</label>
<label class="custom_check w-100 mb-4">
<input type="checkbox" name="year">
<span class="checkmark"></span> B+
</label>
</div>
<button type="submit" class="btn w-100 btn-primary">Apply</button>
</form>
</div>
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
<th>Patient</th>
<th>number</th>
<th>date of birth</th>
<th>address</th>
<th>Account Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
    <?php



$sql="SELECT * FROM patient ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>#".$row['id']."</td>
<td>
<h2 class='table-avatar'>
<a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'><img class='avatar avatar-img' src='upload/".$row['profile']."' alt='User Image'></a>
<a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'><span class='user-name'>".$row['username']."</span> <span class='text-muted'>".$row['numbers']."</span></a>
</h2>
</td>
<td><span class='user-name'>".$row['numbers']." </span><span class='d-block'></span></td>
<td><span class='user-name'>".$row['dob']." </span><span class='d-block'></span></td>
<td>
<label class='toggle-switch' for='status7'>
<span class='text-muted'>".$row['address']."</span>

</label>
</td>
<td>

<p>".$row['status']."</p>
</span>
</label>
</td>
<td>

<a href='includes/active.php?title=".$row['id']."'  onclick='return showPopup1()'  class='btn btn-sm bg-success-light'>
 activate
</a>
<a href='includes/inactive.php?title=".$row['id']."'  onclick='return showPopup2()'  class='btn btn-sm bg-danger-light'>
 deactivate
</a>
<a href='includes/deld.php?title=".$row['id']."'  onclick='return showPopup()' class='btn btn-sm bg-danger-light'>
 delete
</a>
</span>
</label>
</td>
</tr>");
          echo" ";
         //The search 2;
}


}
else{
    echo("no patient available");
          
}



 




                              ?>








</tbody>
</table>
</div>
</div>
</div>
 <script>
    function showPopup1() {
      if (confirm("are you sure you want to activate patient?")) {
        return true;  // User clicked "OK", so proceed to new page
      } else {
        return false;  // User clicked "Cancel", so stay on current page
      }
    }
      function showPopup2() {
      if (confirm("are you sure you want to deactivate patient?")) {
        return true;  // User clicked "OK", so proceed to new page
      } else {
        return false;  // User clicked "Cancel", so stay on current page
      }
    } 
      function showPopup() {
      if (confirm("are you sure you want to delete patient?")) {
        return true;  // User clicked "OK", so proceed to new page
      } else {
        return false;  // User clicked "Cancel", so stay on current page
      }
    }
  </script>
<div id="tablepagination" class="dataTables_wrapper"></div>
</div>
</div>

</div>
</div>


<div class="modal fade contentmodal" id="patientlist" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header justify-content-center border-bottom-0">
<h4 class="modal-title">Patient Details</h4>
<button type="button" class="close-btn pos-top" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>
<div class="modal-body">
<div class="media d-flex align-items-center justify-content-between">
<div class="flex-shrink-0 d-flex align-items-center">
<img src="assets/img/profiles/avatar-02.jpg" alt="patient" class="doctor">
<div>
<div class="docs-id"> #454445</div>
<h3>Harden Mike</h3>
<p>Male, 45 Years</p>
</div>
</div>
</div>
<div class="member-wrapper">
<h5>Personal Details</h5>
<div class="row">
<div class="col-sm-4">
<div class="mem-info">
<h6>Registered On</h6>
<p>Nov 21, 2022</p>
</div>
</div>
<div class="col-sm-4">
<div class="mem-info">
<h6>Phone Number</h6>
<p>+1 5454 2154 4545</p>
</div>
</div>
<div class="col-sm-4">
<div class="mem-info">
<h6>Email ID</h6>
<p><a href="https://template.doccure.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1753787463786557537874746265723974787a">[email&#160;protected]</a></p>
</div>
</div>
<div class="col-sm-8">
<div class="mem-info">
<h6>Location</h6>
<p>4417 Goosetown Drive, Taylorsville, North Carolina, 28681</p>
</div>
</div>
<div class="col-sm-4">
<div class="mem-info">
<h6>Date of Birth</h6>
<p>21, Dec 2022</p>
</div>
</div>
</div>
</div>
<div class="lang-wrap">
<p>No of Consultation / Cancelled : <span>85/21</span></p>
<p>Total Income Earned : <span>$4,544,784</span></p>
</div>
<div class="submit-section">
<a data-bs-dismiss="modal" data-bs-toggle="modal" href="#editModal" class="btn btn-primary me-2">Edit</a>
<a data-bs-dismiss="modal" data-bs-toggle="modal" href="#deleteModal" class="btn btn-secondary">Delete Account</a>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade contentmodal" id="editModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header">
<h3 class="mb-0">Edit Patient</h3>
<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>
<div class="modal-body">
<form >
<div class="add-wrap">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Dr. Rayan miller">
<label class="focus-label">Doctor Name <span class="text-danger">*</span></label>
</div>
<label class="mb-1">Patient Image</label>
<div class="change-photo-btn">
<div><i class="feather-upload"></i>
<p>Upload File</p></div>
<input type="file" class="upload">
<span class="file-upload-text"></span>
</div>
<p class="file-name text-success">Successfully Product image.jpg uploaded <a href="#" class="text-danger"><i class="feather-x"></i></a></p>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="$330.00">
<label class="focus-label">Consultation Fees <span class="text-danger">*</span></label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Newyork, USA">
<label class="focus-label">Location <span class="text-danger">*</span></label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="+1 5454 2154 4545">
<label class="focus-label">Phone <span class="text-danger">*</span></label>
</div>
<div class="submit-section">
<button type="submit" class="btn btn-primary btn-save">Save Changes</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header border-bottom-0 justify-content-end">
<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>
<div class="modal-body">
<div class="delete-wrap text-center">
<form >
<div class="del-icon"><i class="feather-x-circle"></i></div>
<h2>Sure you Want to delete</h2>
<p>“Patient”</p>
<div class="submit-section">
<button type="submit" class="btn btn-success me-2">Yes</button>
<a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
</div>
</form>
</div>
 </div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/js/moment.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>
<script src="assets/plugins/datatables/datatables.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/js/script.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="087b1bbaf3595f9996d8a10e-|49" defer=""></script></body>


</html>