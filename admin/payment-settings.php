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

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
<li class="active">
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
<a href="#"><i class="feather-grid"></i> <span> Product List</span> <span class="menu-arrow"></span></a>
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
<div class="page-header">
<div class="row">
<div class="col-sm-6">
<h3 class="page-title">Settings</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
<li class="breadcrumb-item active">Payment Settings</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">

<div class="settings-menu-links">
<ul class="nav nav-tabs menu-tabs">
<li class="nav-item">
<a class="nav-link" href="settings.html">General Settings</a>
</li>
<li class="nav-item">
<a class="nav-link" href="localization-details.html">Localization</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="payment-settings.html">Payment Settings</a>
</li>
<li class="nav-item">
<a class="nav-link" href="email-settings.html">Email Settings</a>
</li>
<li class="nav-item">
<a class="nav-link" href="social-settings.html">Social Media Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="social-links.html">Social Links</a>
</li>
<li class="nav-item">
<a class="nav-link" href="seo-settings.html">SEO Settings</a>
</li>
<li class="nav-item">
<a class="nav-link" href="others-settings.html">Others</a>
</li>
</ul>
</div>

<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-body pt-0">
<div class="card-header d-flex justify-content-between align-items-center">
<h5 class="card-title">Paypal</h5>
<div class="status-toggle d-flex justify-content-between align-items-center">
<input type="checkbox" id="status_1" class="check">
<label for="status_1" class="checktoggle">checkbox</label>
</div>
</div>
<form>
<div class="settings-form">
<div class="form-group">
<p class="pay-cont">Paypal Option</p>
<label class="custom_radio me-4">
<input type="radio" name="budget" value="Yes" checked="">
<span class="checkmark"></span> Sandbox
</label>
<label class="custom_radio">
<input type="radio" name="budget" value="Yes">
<span class="checkmark"></span> Live
</label>
</div>
<div class="form-group form-placeholder">
<label>Braintree Tokenization key <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
</div>
<div class="form-group form-placeholder">
<label>Braintree Merchant ID <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
</div>
<div class="form-group form-placeholder">
<label>Braintree Public key <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
</div>
<div class="form-group form-placeholder">
<label>Braintree Private key <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
</div>
<div class="form-group form-placeholder">
<label>Paypal APP ID <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
</div>
<div class="form-group form-placeholder">
<label>Paypal Secret Key <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
</div>
<div class="form-group mb-0">
<div class="settings-btns">
<button type="submit" class="btn btn-orange">Save</button>
<button type="submit" class="btn btn-grey">Cancel</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-body pt-0">
<div class="card-header d-flex justify-content-between align-items-center">
<h5 class="card-title">Stripe</h5>
<div class="status-toggle d-flex justify-content-between align-items-center">
<input type="checkbox" id="status_2" class="check" checked="">
<label for="status_2" class="checktoggle">checkbox</label>
</div>
</div>
<form>
<div class="settings-form">
<div class="form-group">
<p class="pay-cont">Stripe Option</p>
<label class="custom_radio me-4">
<input type="radio" name="budget" value="Yes" checked="">
<span class="checkmark"></span> Sandbox
</label>
<label class="custom_radio">
<input type="radio" name="budget" value="Yes">
<span class="checkmark"></span> Live
</label>
</div>
<div class="form-group form-placeholder">
<label>Gateway Name <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="Stripe">
</div>
<div class="form-group form-placeholder">
<label>API Key <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr">
</div>
<div class="form-group form-placeholder">
<label>Rest Key <span class="star-red">*</span></label>
<input type="text" class="form-control" placeholder="sk_test_8HwqAWwBd4C4E77bgAO1jUgk00hDlERgn3">
</div>
<div class="form-group mb-0">
<div class="settings-btns">
<button type="submit" class="btn btn-orange">Save</button>
<button type="submit" class="btn btn-grey">Cancel</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="d163ded3076f30d5a9c2d10c-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="d163ded3076f30d5a9c2d10c-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="d163ded3076f30d5a9c2d10c-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="d163ded3076f30d5a9c2d10c-text/javascript"></script>

<script src="assets/js/script.js" type="d163ded3076f30d5a9c2d10c-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d163ded3076f30d5a9c2d10c-|49" defer=""></script></body>


</html>