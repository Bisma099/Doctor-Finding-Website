<!DOCTYPE html>
<html lang="en">


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

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
<form class="search" method="post">
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
<li class="active">
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
<li class="submenu">
<a href="#"><i class="feather-file-minus"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
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

<div class="row">
<div class="col-md-8 col-lg-8 col-xl-6">
<div class="profile-info">
<h4>My Profile</h4>
<div class="profile-list">
<div class="profile-detail">
<label class="avatar profile-cover-avatar">
<img class="avatar-img" src="assets/img/profiles/avatar-02.jpg" alt="Profile Image">
</label>
<div class="pro-name">
<p>@ Johnson223</p>
<h4>Johnson Samuel</h4>
</div>
<a href="#" class="edit-pro"><i class="feather-edit"></i> Edit</a>
</div>
<div class="row">
<div class="col-md-12">
<h6 class="pro-title">Personal Information</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis adipiscing arcu praesent tellus aliquam quam volutpat. Etiam tincidunt habitant sit maecenas feugiat eget convallis. Aliquam non viverra accumsan vulputate id aliquam et enim vivamus. </p>
</div>
<div class="col-md-4 mb-3">
<h5>Date of Birth</h5>
<p>15/12/2022</p>
</div>
<div class="col-md-4 mb-3">
<h5>Gender</h5>
<p>Male</p>
</div>
<div class="col-md-4 mb-3">
<h5>Age</h5>
<p>46</p>
</div>
<div class="col-md-12">
<h6 class="pro-title">Address & Location</h6>
</div>
<div class="col-md-4">
<h5>Address</h5>
<p>4663 Agriculture Lane, Miami,</p>
</div>
<div class="col-md-4">
<h5>Country</h5>
<p>United States</p>
</div>
<div class="col-md-4">
<h5>State</h5>
<p>Florida</p>
</div>
</div>
</div>
<div class="profile-list">
<div class="row">
<div class="col-md-12">
<div class="pro-title d-flex justify-content-between">
<h6>Account Information</h6>
<a href="#" class="edit-pro"><i class="feather-edit"></i> Edit</a>
</div>
</div>
<div class="col-md-6 mb-3">
<h5>Email Address</h5>
<p><a href="https://template.doccure.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbb1b4b3a8b4b5a8bab6aebeb7e9ebe9e89bbcb6bab2b7f5b8b4b6">[email&#160;protected]</a></p>
</div>
<div class="col-md-6 mb-3">
<h5>Phone Number</h5>
<p>+1 534883 487843</p>
</div>
<div class="col-md-6">
<h5>Social Links</h5>
<ul class="social-icon">
<li>
<a href="#"><i class="feather-twitter"></i></a>
</li>
<li>
<a href="#"><i class="feather-facebook"></i></a>
</li>
<li>
<a href="#"><i class="feather-linkedin"></i></a>
</li>
<li>
<a href="#"><i class="feather-instagram"></i></a>
</li>
<li>
<a href="#"><i class="feather-youtube"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="83f1e6ec21e6bf84de3afe11-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="83f1e6ec21e6bf84de3afe11-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="83f1e6ec21e6bf84de3afe11-text/javascript"></script>

<script src="assets/js/moment.min.js" type="83f1e6ec21e6bf84de3afe11-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="83f1e6ec21e6bf84de3afe11-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="83f1e6ec21e6bf84de3afe11-text/javascript"></script>

<script src="assets/js/script.js" type="83f1e6ec21e6bf84de3afe11-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="83f1e6ec21e6bf84de3afe11-|49" defer=""></script></body>


</html>