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
<li class="active">
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
<div class="comp-sec-wrapper">

<section class="comp-section">
<div class="section-header">
<h3 class="section-title">Avatar</h3>
<div class="line"></div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Sizing</h5>
</div>
<div class="card-body">
<div class="avatar avatar-xxl">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar avatar-xl">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar avatar-lg">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar avatar-xs">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Avatar With Status</h5>
</div>
<div class="card-body">
<div class="avatar avatar-online ava-status">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar avatar-offline ava-status">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar avatar-away ava-status">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Shape</h5>
</div>
<div class="card-body">
<div class="avatar">
<img class="avatar-img rounded" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Group</h5>
</div>
<div class="card-body">
<div class="avatar-group">
<div class="avatar">
<img class="avatar-img rounded-circle border border-white" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</div>
<div class="avatar">
<img class="avatar-img rounded-circle border border-white" alt="User Image" src="assets/img/profiles/avatar-03.jpg">
</div>
<div class="avatar">
<img class="avatar-img rounded-circle border border-white" alt="User Image" src="assets/img/profiles/avatar-04.jpg">
</div>
<div class="avatar">
<span class="avatar-title rounded-circle border border-white">CF</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="comp-section">
<div class="section-header">
<h3 class="section-title">Alerts</h3>
<div class="line"></div>
</div>
<div class="card">
<div class="card-body">
<div class="alert alert-primary alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-secondary alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-info alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-light alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-dark alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div>
</section>
 

<section class="comp-section">
<div class="section-header">
<h3 class="section-title">Breadcrumbs</h3>
<div class="line"></div>
</div>
<div class="card">
<div class="card-body">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item active" aria-current="page">Home</li>
</ol>
</nav>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Products</li>
</ol>
</nav>
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Products</a></li>
<li class="breadcrumb-item active" aria-current="page">Accessories</li>
</ol>
</nav>
</div>
</div>
</section>


<section class="comp-section comp-buttons">
<div class="section-header">
<h3 class="section-title">Buttons</h3>
<div class="line"></div>
</div>
<div class="card">
<div class="card-body">
<h5 class="card-title">Default Button</h5>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>
<hr>
<h5 class="card-title">Button Sizes</h5>
<p>
<button type="button" class="btn btn-primary btn-lg">Primary</button>
<button type="button" class="btn btn-secondary btn-lg">Secondary</button>
<button type="button" class="btn btn-success btn-lg">Success</button>
<button type="button" class="btn btn-danger btn-lg">Danger</button>
<button type="button" class="btn btn-warning btn-lg">Warning</button>
<button type="button" class="btn btn-info btn-lg">Info</button>
<button type="button" class="btn btn-light btn-lg">Light</button>
<button type="button" class="btn btn-dark btn-lg">Dark</button>
</p>
<p>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
</p>
<p>
<button type="button" class="btn btn-primary btn-sm">Primary</button>
<button type="button" class="btn btn-secondary btn-sm">Secondary</button>
<button type="button" class="btn btn-success btn-sm">Success</button>
<button type="button" class="btn btn-danger btn-sm">Danger</button>
<button type="button" class="btn btn-warning btn-sm">Warning</button>
<button type="button" class="btn btn-info btn-sm">Info</button>
<button type="button" class="btn btn-light btn-sm">Light</button>
<button type="button" class="btn btn-dark btn-sm">Dark</button>
</p>
<hr>
<h5 class="card-title">Button Groups</h5>
<div class="btn-toolbar">
<div class="btn-group btn-group-lg">
<button type="button" class="btn btn-primary">Left</button>
<button type="button" class="btn btn-primary">Middle</button>
<button type="button" class="btn btn-primary">Right</button>
</div>
</div>
<br>
<div class="btn-toolbar">
<div class="btn-group">
<button type="button" class="btn btn-primary">Left</button>
<button type="button" class="btn btn-primary">Middle</button>
<button type="button" class="btn btn-primary">Right</button>
</div>
</div>
<br>
<div class="btn-toolbar">
<div class="btn-group btn-group-sm">
<button type="button" class="btn btn-primary">Left</button>
<button type="button" class="btn btn-primary">Middle</button>
<button type="button" class="btn btn-primary">Right</button>
</div>
</div>
</div>
</div>

<div class="card">
<div class="card-header">
<h5 class="card-title">Rounded Button</h5>
<p class="card-text">use <code>.btn-rounded</code> in class <code>.btn</code> class to get Rounded button</p>
</div>
<div class="card-body">
<button type="button" class="btn btn-rounded btn-primary">Primary</button>
<button type="button" class="btn btn-rounded btn-secondary">Secondary</button>
<button type="button" class="btn btn-rounded btn-success">Success</button>
<button type="button" class="btn btn-rounded btn-danger">Danger</button>
<button type="button" class="btn btn-rounded btn-warning">Warning</button>
<button type="button" class="btn btn-rounded btn-info">Info</button>
<button type="button" class="btn btn-rounded btn-light">Light</button>
<button type="button" class="btn btn-rounded btn-dark">Dark</button>
<hr>
<p>use <code>.btn-rounded</code> in class <code>.btn-outline-*</code> class to get Rounded Outline button</p>
<button type="button" class="btn btn-rounded btn-outline-primary">Primary</button>
<button type="button" class="btn btn-rounded btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-rounded btn-outline-success">Success</button>
<button type="button" class="btn btn-rounded btn-outline-danger">Danger</button>
<button type="button" class="btn btn-rounded btn-outline-warning">Warning</button>
<button type="button" class="btn btn-rounded btn-outline-info">Info</button>
<button type="button" class="btn btn-rounded btn-outline-light">Light</button>
<button type="button" class="btn btn-rounded btn-outline-dark">Dark</button>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Outline Buttons</h5>
<p class="card-text">Use <code>.btn-outline-*</code> class for outline buttons.</p>
</div>
<div class="card-body">
<div class="row row-sm align-items-center">
<div class="col-12 col-xl mb-3">Normal</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-primary">Primary</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-secondary">Secondary</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-success">Success</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-warning">Warning</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-danger">Danger</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-info">Info</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-light">Light</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-dark">Dark</button>
</div>
</div>
<div class="row row-sm align-items-center mt-3">
<div class="col-12 col-xl mb-3">Active</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-primary active">Primary</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-secondary active">Secondary</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-success active">Success</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-warning active">Warning</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-danger active">Danger</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-info active">Info</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-light active">Light</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button type="button" class="btn w-100 btn-outline-dark active">Dark</button>
</div>
</div>
<div class="row row-sm align-items-center mt-3">
<div class="col-12 col-xl mb-3">Disabled</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-primary">Primary</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-secondary">Secondary</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-success">Success</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-warning">Warning</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-danger">Danger</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-info">Info</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-light">Light</button>
</div>
<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<button disabled="" type="button" class="btn w-100 btn-outline-dark">Dark</button>
</div>
</div>
</div>
</div>


<div class="card mb-4">
<div class="card-header">
<h5 class="card-title">Progress Button</h5>
</div>
<div class="card-body">
<button type="button" class="btn btn-primary"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Primary</button>
<button type="button" class="btn btn-secondary"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Secondary</button>
<button type="button" class="btn btn-success"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Success</button>
<button type="button" class="btn btn-danger"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Danger</button>
<button type="button" class="btn btn-warning"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Warning</button>
<button type="button" class="btn btn-info"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Info</button>
<button type="button" class="btn btn-dark"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Dark</button>
</div>
</div>

</section>


<section class="comp-section comp-cards">
<div class="section-header">
<h3 class="section-title">Cards</h3>
<div class="line"></div>
</div>
<div class="row">
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<img alt="Card Image" src="assets/img/img-01.jpg" class="card-img-top">
<div class="card-header">
<h5 class="card-title mb-0">Card with image and links</h5>
</div>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="card-link" href="#">Card link</a>
<a class="card-link" href="#">Another link</a>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<img alt="Card Image" src="assets/img/img-01.jpg" class="card-img-top">
<div class="card-header">
<h5 class="card-title mb-0">Card with image and button</h5>
</div>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<img alt="Card Image" src="assets/img/img-01.jpg" class="card-img-top">
<div class="card-header">
<h5 class="card-title mb-0">Card with image and list</h5>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Cras justo odio</li>
<li class="list-group-item">Dapibus ac facilisis in</li>
<li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title mb-0">Card with links</h5>
</div>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="card-link" href="#">Card link</a>
<a class="card-link" href="#">Another link</a>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title mb-0">Card with button</h5>
</div>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title mb-0">Card with list</h5>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Cras justo odio</li>
<li class="list-group-item">Dapibus ac facilisis in</li>
<li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
This is my header
</div>
<div class="card-body">
<h5 class="card-title">Special title treatment</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
<div class="card-footer text-muted">
This is my footer
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<ul role="tablist" class="nav nav-tabs card-header-tabs float-right">
<li class="nav-item">
<a href="#tab-1" data-bs-toggle="tab" class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a href="#tab-2" data-bs-toggle="tab" class="nav-link">Link</a>
</li>
<li class="nav-item">
<a href="#tab-3" data-bs-toggle="tab" class="nav-link disabled">Disabled</a>
</li>
</ul>
</div>
<div class="card-body">
<div class="tab-content pt-0">
<div role="tabpanel" id="tab-1" class="tab-pane fade show active">
<h5 class="card-title">Card with tabs</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
<div role="tabpanel" id="tab-2" class="tab-pane fade text-center">
<h5 class="card-title">Card with tabs</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
<div role="tabpanel" id="tab-3" class="tab-pane fade">
<h5 class="card-title">Card with tabs</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<ul role="tablist" class="nav nav-pills card-header-pills float-right">
<li class="nav-item">
<a href="#tab-4" data-bs-toggle="tab" class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a href="#tab-5" data-bs-toggle="tab" class="nav-link">Link</a>
</li>
<li class="nav-item">
<a href="#tab-6" data-bs-toggle="tab" class="nav-link disabled">Disabled</a>
</li>
</ul>
</div>
<div class="card-body">
<div class="tab-content pt-0">
<div role="tabpanel" id="tab-4" class="tab-pane fade show active">
<h5 class="card-title">Card with pills</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
<div role="tabpanel" id="tab-5" class="tab-pane fade text-center">
<h5 class="card-title">Card with pills</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
<div role="tabpanel" id="tab-6" class="tab-pane fade">
<h5 class="card-title">Card with pills</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a class="btn btn-primary" href="#">Go somewhere</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="comp-section comp-dropdowns">
<div class="section-header">
<h3 class="section-title">Dropdowns</h3>
<div class="line"></div>
</div>
<div class="card">
<div class="card-body">
<h5 class="card-title">Dropdowns within Text</h5>
<div class="dropdown">
<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
</div>
</div>
<hr>
<h5 class="card-title">Dropdowns within Buttons</h5>
<div class="btn-group">
<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
 <div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<hr>
<h5 class="card-title">Split button dropdowns</h5>
<div class="btn-group">
<button type="button" class="btn btn-primary">Action</button>
<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-secondary">Action</button>
<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-info">Action</button>
<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-success">Action</button>
<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-warning">Action</button>
<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="btn-group">
<button type="button" class="btn btn-danger">Action</button>
<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
</div>
</div>
</section>


<section class="comp-section">
<div class="section-header">
<h3 class="section-title">Pagination</h3>
<div class="line"></div>
</div>
<div class="card">
<div class="card-body">
<div>
<ul class="pagination mb-4">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1">Previous</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active">
<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
</li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#">Next</a>
</li>
</ul>
</div>
<div>
<ul class="pagination mb-4">
<li class="page-item">
<a class="page-link" href="#" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</div>
<div>
<ul class="pagination pagination-lg mb-4">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1">Previous</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active">
<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
</li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#">Next</a>
</li>
</ul>
</div>
<div>
<ul class="pagination pagination-sm mb-0">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1">Previous</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active">
<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
</li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
 <a class="page-link" href="#">Next</a>
</li>
</ul>
</div>
</div>
</div>
</section>


<section class="comp-section">
<div class="section-header">
<h3 class="section-title">Progress</h3>
<div class="line"></div>
</div>
<div class="progress-example card">
<div class="card-header">
<h5 class="card-title">Large Progress Bars</h5>
</div>
<div class="card-body pb-0">
<div class="row">
<div class="col-md-6">
<div>
<div class="progress progress-lg">
<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="progress progress-lg">
<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-lg">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="progress-example card">
<div class="card-header">
<h5 class="card-title">Default Progress Bars</h5>
</div>
<div class="card-body pb-0">
<div class="row">
<div class="col-md-6">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="col-md-6">
<div class="progress">
<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="progress-example card">
<div class="card-header">
<h5 class="card-title">Medium Progress Bars</h5>
</div>
<div class="card-body pb-0">
<div class="row">
<div class="col-md-6">
<div>
<div class="progress progress-md">
<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="progress progress-md">
<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-md">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="progress-example card">
<div class="card-header">
<h5 class="card-title">Small Progress Bars</h5>
</div>
<div class="card-body pb-0">
<div class="row">
<div class="col-md-6">
<div>
<div class="progress progress-sm">
<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="progress progress-sm">
<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-sm">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="progress-example card">
<div class="card-header">
<h5 class="card-title">Extra Small Progress Bars</h5>
</div>
<div class="card-body pb-0">
<div class="row">
<div class="col-md-6">
<div>
<div class="progress progress-xs">
<div class="progress-bar w-75" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="progress progress-xs">
<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="comp-section">
<div class="section-header">
<h3 class="section-title">Tabs</h3>
<div class="line"></div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Basic tabs</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs">
<li class="nav-item"><a class="nav-link active" href="#basictab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#basictab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#basictab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="basictab1">
Tab content 1
</div>
<div class="tab-pane" id="basictab2">
Tab content 2
</div>
<div class="tab-pane" id="basictab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Basic justified tabs</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-justified">
<li class="nav-item"><a class="nav-link active" href="#basic-justified-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#basic-justified-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">Dropdown</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#basic-justified-tab3" data-bs-toggle="tab">Dropdown 1</a>
<a class="dropdown-item" href="#basic-justified-tab4" data-bs-toggle="tab">Dropdown 2</a>
</div>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="basic-justified-tab1">
Tab content 1
</div>
<div class="tab-pane" id="basic-justified-tab2">
Tab content 2
</div>
<div class="tab-pane" id="basic-justified-tab3">
Tab content 3
</div>
<div class="tab-pane" id="basic-justified-tab4">
Tab content 4
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Top line tabs</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-top">
<li class="nav-item"><a class="nav-link active" href="#top-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#top-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#top-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="top-tab1">
Tab content 1
</div>
<div class="tab-pane" id="top-tab2">
Tab content 2
</div>
<div class="tab-pane" id="top-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Top line justified</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-top nav-justified">
<li class="nav-item"><a class="nav-link active" href="#top-justified-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#top-justified-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#top-justified-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="top-justified-tab1">
Tab content 1
</div>
<div class="tab-pane" id="top-justified-tab2">
Tab content 2
</div>
<div class="tab-pane" id="top-justified-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Bottom line tabs</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-bottom">
<li class="nav-item"><a class="nav-link active" href="#bottom-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="bottom-tab1">
Tab content 1
</div>
<div class="tab-pane" id="bottom-tab2">
Tab content 2
</div>
<div class="tab-pane" id="bottom-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Bottom line justified</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item"><a class="nav-link active" href="#bottom-justified-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="bottom-justified-tab1">
Tab content 1
</div>
<div class="tab-pane" id="bottom-justified-tab2">
Tab content 2
</div>
<div class="tab-pane" id="bottom-justified-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Solid tabs</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-solid">
<li class="nav-item"><a class="nav-link active" href="#solid-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="solid-tab1">
Tab content 1
</div>
<div class="tab-pane" id="solid-tab2">
Tab content 2
</div>
<div class="tab-pane" id="solid-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Solid justified</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-solid nav-justified">
<li class="nav-item"><a class="nav-link active" href="#solid-justified-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-justified-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-justified-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="solid-justified-tab1">
Tab content 1
</div>
<div class="tab-pane" id="solid-justified-tab2">
Tab content 2
</div>
<div class="tab-pane" id="solid-justified-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Solid Rounded</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
<li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-rounded-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-rounded-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="solid-rounded-tab1">
Tab content 1
</div>
<div class="tab-pane" id="solid-rounded-tab2">
Tab content 2
</div>
<div class="tab-pane" id="solid-rounded-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h5 class="card-title">Rounded justified</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
<li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-bs-toggle="tab">Messages</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="solid-rounded-justified-tab1">
Tab content 1
</div>
<div class="tab-pane" id="solid-rounded-justified-tab2">
Tab content 2
</div>
<div class="tab-pane" id="solid-rounded-justified-tab3">
Tab content 3
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="comp-section">
<div class="section-header">
<h3 class="section-title">Typography</h3>
<div class="line"></div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Headings</h5>
</div>
<div class="card-body">
<h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>
</div>
</div>
<div class="card">
<div class="card-header">
<h5 class="card-title">Blockquotes</h5>
</div>
<div class="card-body">
<blockquote>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>
<blockquote class="blockquote mb-0">
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Text element</h5>
</div>
<div class="card-body">
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
<p class="text-monospace mb-0">This is in monospace</p>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Coloured Link</h5>
</div>
<div class="card-body">
<p class="text-primary">.text-primary</p>
<p class="text-secondary">.text-secondary</p>
<p class="text-success">.text-success</p>
<p class="text-danger">.text-danger</p>
<p class="text-warning">.text-warning</p>
<p class="text-info">.text-info</p>
<p class="text-light bg-dark">.text-light</p>
<p class="text-dark">.text-dark</p>
<p class="text-muted">.text-muted</p>
<p class="text-white bg-dark mb-0">.text-white</p>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Coloured text</h5>
</div>
<div class="card-body">
<p><a href="#" class="text-primary">Primary link</a></p>
<p><a href="#" class="text-secondary">Secondary link</a></p>
<p><a href="#" class="text-success">Success link</a></p>
<p><a href="#" class="text-danger">Danger link</a></p>
<p><a href="#" class="text-warning">Warning link</a></p>
<p><a href="#" class="text-info">Info link</a></p>
<p><a href="#" class="text-light bg-dark">Light link</a></p>
<p><a href="#" class="text-dark">Dark link</a></p>
<p><a href="#" class="text-muted">Muted link</a></p>
<p><a href="#" class="text-white bg-dark mb-0">White link</a></p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Bullet Lists</h5>
</div>
<div class="card-body">
<ul class="mb-0 bullets">
<li>Lorem ipsum dolor sit amet</li>
<li>Consectetur adipiscing elit</li>
<li>Integer molestie lorem at massa</li>
<li>Facilisis in pretium nisl aliquet</li>
<li>Nulla volutpat aliquam velit
<ul>
<li>Phasellus iaculis neque</li>
<li>Purus sodales ultricies</li>
<li>Vestibulum laoreet porttitor sem</li>
<li>Ac tristique libero volutpat at</li>
</ul>
</li>
<li>Faucibus porta lacus fringilla vel</li>
<li>Aenean sit amet erat nunc</li>
<li>Eget porttitor lorem</li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Bullet Lists</h5>
</div>
<div class="card-body">
<ol class="mb-0">
<li>Lorem ipsum dolor sit amet</li>
<li>Consectetur adipiscing elit</li>
<li>Integer molestie lorem at massa</li>
<li>Facilisis in pretium nisl aliquet</li>
<li>Nulla volutpat aliquam velit
<ul>
<li>Phasellus iaculis neque</li>
<li>Purus sodales ultricies</li>
<li>Vestibulum laoreet porttitor sem</li>
<li>Ac tristique libero volutpat at</li>
</ul>
</li>
<li>Faucibus porta lacus fringilla vel</li>
<li>Aenean sit amet erat nunc</li>
<li>Eget porttitor lorem</li>
</ol>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Unstyled Lists</h5>
</div>
<div class="card-body">
<ul class="list-unstyled mb-0">
<li>Lorem ipsum dolor sit amet</li>
<li>Consectetur adipiscing elit</li>
<li>Integer molestie lorem at massa</li>
<li>Facilisis in pretium nisl aliquet</li>
<li>Nulla volutpat aliquam velit
<ul>
<li>Phasellus iaculis neque</li>
<li>Purus sodales ultricies</li>
<li>Vestibulum laoreet porttitor sem</li>
<li>Ac tristique libero volutpat at</li>
</ul>
</li>
<li>Faucibus porta lacus fringilla vel</li>
<li>Aenean sit amet erat nunc</li>
<li>Eget porttitor lorem</li>
</ul>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="1bde39bff11501aa605546ce-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="1bde39bff11501aa605546ce-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="1bde39bff11501aa605546ce-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="1bde39bff11501aa605546ce-text/javascript"></script>

<script src="assets/js/script.js" type="1bde39bff11501aa605546ce-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1bde39bff11501aa605546ce-|49" defer=""></script></body>


</html>