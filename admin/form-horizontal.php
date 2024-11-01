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

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
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

<li class="nav-item">
<a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
<i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
</a>
</li>


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


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title"><span>Main</span></li>
<li>
<a href="index.html"><i class="feather-grid"></i> <span>Dashboard</span></a>
</li>
<li>
<a href="upcoming-appointments.html"><i class="feather-calendar"></i> <span>Appointments</span></a>
</li>
<li>
<a href="specialities.html"><i class="feather-package"></i> <span>Specialities</span></a>
</li>
<li>
<a href="doctor-list.html"><i class="feather-user-plus"></i> <span>Doctors</span></a>
</li>
<li>
<a href="patient-list.html"><i class="feather-users"></i> <span>Patients</span></a>
</li>
<li>
<a href="ratings.html"><i class="feather-star"></i> <span>Reviews</span></a>
</li>
 <li>
<a href="transaction.html"><i class="feather-credit-card"></i> <span>Transactions</span></a>
</li>
<li>
<a href="settings.html"><i class="feather-sliders"></i> <span> Settings</span></a>
</li>
<li class="submenu">
<a href="#"><i class="feather-file-text"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="appointment-report.html">Appointment Report</a></li>
<li><a href="income-report.html">Income Report</a></li>
<li><a href="invoice-report.html">Invoice Report</a></li>
<li><a href="user-reports.html">Users Report</a></li>
</ul>
</li>
<li class="menu-title">
<span>Pharmacy</span>
</li>
<li class="submenu">
<a href="#"><i class="feather-file-plus"></i> <span> Pharmacies</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="pharmacy-list.html">All Pharmacies</a></li>
<li><a href="pharmacy-category.html">Categories</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="feather-shopping-cart"></i> <span> Product List</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="product-list.html">All Products</a></li>
<li><a href="product-category.html">Categories</a></li>
</ul>
</li>
<li class="menu-title">
<span>Blog</span>
</li>
<li class="submenu">
<a href="#"><i class="feather-grid"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="active-blog.html">Blogs</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
<li><a href="add-blog.html">Add Blog</a></li>
<li><a href="edit-blog.html">Edit Blog</a></li>
</ul>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li>
<a href="add-profile.html"><i class="feather-user"></i> <span>Profile</span></a>
</li>
<li class="submenu">
<a href="#"><i class="feather-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="login.html"> Login </a></li>
<li><a href="register.html"> Register </a></li>
<li><a href="forgot-password.html"> Forgot Password </a></li>
<li><a href="lock-screen.html"> Lock Screen </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="feather-book-open"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="error-404.html">404 Error </a></li>
<li><a href="error-500.html">500 Error </a></li>
</ul>
</li>
<li>
<a href="blank-page.html"><i class="feather-clipboard"></i> <span>Blank Page</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li>
<a href="components.html"><i class="feather-pocket"></i> <span>Components</span></a>
</li>
<li class="submenu active">
<a href="#"><i class="feather-file-minus"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html" class="active">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html">Form Mask </a></li>
<li><a href="form-validation.html">Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="feather-align-justify"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="feather-life-buoy"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Horizontal Form</h3>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h4 class="card-title">Basic Form</h4>
</div>
<div class="card-body">
<form action="#">
<div class="form-group row">
<label class="col-lg-3 col-form-label">First Name</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Last Name</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Email Address</label>
<div class="col-lg-9">
<input type="email" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Username</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Password</label>
<div class="col-lg-9">
<input type="password" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Repeat Password</label>
<div class="col-lg-9">
<input type="password" class="form-control">
</div>
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
<div class="col-xl-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h4 class="card-title">Address Form</h4>
</div>
<div class="card-body">
<form action="#">
<div class="form-group row">
<label class="col-lg-3 col-form-label">Address 1</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Address 2</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
 </div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">City</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">State</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Country</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Postal Code</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Two Column Horizontal Form</h4>
</div>
<div class="card-body">
<h4 class="card-title">Personal Information</h4>
<form action="#">
<div class="row">
<div class="col-xl-6">
<div class="form-group row">
<label class="col-lg-3 col-form-label">First Name</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Last Name</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Gender</label>
<div class="col-lg-9">
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked>
<label class="form-check-label" for="gender_male">
Male
</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
<label class="form-check-label" for="gender_female">
Female
</label>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Blood Group</label>
<div class="col-lg-9">
<select class="form-select">
<option>Select</option>
<option value="1">A+</option>
<option value="2">O+</option>
<option value="3">B+</option>
<option value="4">AB+</option>
</select>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="form-group row">
<label class="col-lg-3 col-form-label">Username</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Email</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Password</label>
<div class="col-lg-9">
<input type="password" class="form-control">
</div>
 </div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Repeat Password</label>
<div class="col-lg-9">
<input type="password" class="form-control">
</div>
</div>
</div>
</div>
<h4 class="card-title">Address</h4>
<div class="row">
<div class="col-xl-6">
<div class="form-group row">
<label class="col-lg-3 col-form-label">Address Line 1</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Address Line 2</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">State</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
</div>
<div class="col-xl-6">
<div class="form-group row">
<label class="col-lg-3 col-form-label">City</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Country</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Postal Code</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
</div>
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Two Column Horizontal Form</h4>
</div>
<div class="card-body">
<form action="#">
<div class="row">
<div class="col-xl-6">
<h4 class="card-title">Personal Details</h4>
<div class="form-group row">
<label class="col-lg-3 col-form-label">First Name</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Last Name</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Password</label>
<div class="col-lg-9">
<input type="password" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">State</label>
<div class="col-lg-9">
<select class="form-select">
<option>Select State</option>
<option value="1">California</option>
<option value="2">Texas</option>
<option value="3">Florida</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">About</label>
<div class="col-lg-9">
<textarea rows="4" cols="5" class="form-control" placeholder="Enter message"></textarea>
</div>
</div>
</div>
 <div class="col-xl-6">
<h4 class="card-title">Personal details</h4>
<div class="row">
<label class="col-lg-3 col-form-label">Name</label>
<div class="col-lg-9">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" placeholder="First Name" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" placeholder="Last Name" class="form-control">
</div>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Email</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Phone</label>
<div class="col-lg-9">
<input type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label">Address</label>
<div class="col-lg-9">
<input type="text" class="form-group form-control">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<select class="form-select">
<option>Select Country</option>
<option value="1">USA</option>
<option value="2">France</option>
<option value="3">India</option>
<option value="4">Spain</option>
</select>
</div>
<div class="form-group">
<input type="text" placeholder="ZIP code" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" placeholder="State/Province" class="form-control">
</div>
<div class="form-group">
<input type="text" placeholder="City" class="form-control">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="3523604f369457c8aff66621-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="3523604f369457c8aff66621-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="3523604f369457c8aff66621-text/javascript"></script>

<script src="assets/js/script.js" type="3523604f369457c8aff66621-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="3523604f369457c8aff66621-|49" defer=""></script></body>


</html>