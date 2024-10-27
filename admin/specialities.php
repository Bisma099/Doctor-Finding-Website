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
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
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
<h5 class="card-title">Specialities</h5>
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
<th>icon</th>
<th>Specialities</th>
<th>Action</th>
</tr>
</thead>
<tbody>
     <?php



$sql="SELECT * FROM specials ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>#".$row['id']."</td>
<td>
<h2 class='table-avatar'>
<a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'><img class='avatar avatar-img' src='upload/".$row['speciality']."' alt='User Image'></a>

</h2>
</td>


<td>

<p>".$row['img']."</p>
</span>
</label>
</td>
<td>

<a href='includes/delsk.php?title=".$row['id']."' onclick='return showPopup()'  class='btn btn-sm bg-danger-light'>
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
    echo("no skill added");
          
}



 




                              ?>








</tbody>
</table>

</div>
 <script>
   
      
      function showPopup() {
      if (confirm("are you sure you want to delete skill")) {
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

<div class="card">
 <div class="container">
  <form action="uploadskill.php"  method="POST" enctype="multipart/form-data">
<div class="col-12 col-md-6 col-lg-4">
<div class="form-group">

<label>speciality</label>
<input name="skill" type="text" placeholder="speciality" class="form-control">
<label>speciality logo</label>
<input name="file" type="file" placeholder="confirm" class="form-control">

</div>
</div>


<br>
<div class="col-12 col-md-6 col-lg-4">
<div class="form-group">
<button class="btn btn-primary " name="submit" type="submit">Add</button>
</div>
</div>
</form>
</div>
</div>


<div class="modal fade contentmodal" id="addModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header">
<h3 class="mb-0">Add Speciality</h3>
<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>
<div class="modal-body">
<form >
<div class="add-wrap">
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Speciality Name<span class="text-danger">*</span></label>
</div>
<div class="change-photo-btn">
<div><i class="feather-upload"></i>
<p>Upload File</p></div>
<input type="file" class="upload">
</div>
<p class="text-success">Successfully specialityimage.jpg uploaded <a href="#" class="text-danger"><i class="feather-x"></i></a></p>
<div class="submit-section">
<button type="submit" class="btn btn-primary btn-save">Save Changes</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal fade contentmodal" id="editModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header">
<h3 class="mb-0">Edit Speciality</h3>
<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>
<div class="modal-body">
<form  action="uploadskil.php" method="post">
<div class="add-wrap">
<div class="form-group form-focus">
<input name="skill" type="text" class="form-control floating" value="Cardiology">
<label class="focus-label">Speciality Name<span class="text-danger">*</span></label>
</div>
<div class="change-photo-btn">
<div><i class="feather-upload"></i>
<p>Upload File</p></div>
<input type="file" name="file" class="upload">
<span class="file-upload-text"></span>
</div>
<p class="file-name text-success">specialityimage.jpg <a href="#" class="text-danger"><i class="feather-x"></i></a></p>
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
<form >
<div class="delete-wrap text-center">
<div class="del-icon"><i class="feather-x-circle"></i></div>
<h2>Sure you Want to delete</h2>
<p>“Cardiolody”</p>
<div class="submit-section">
<button type="submit" class="btn btn-success me-2">Yes</button>
<a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>
<script src="assets/plugins/datatables/datatables.min.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>

<script src="assets/js/moment.min.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>

<script src="assets/js/script.js" type="ff82198b7f7ffff15a3c236f-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ff82198b7f7ffff15a3c236f-|49" defer=""></script></body>

</html>