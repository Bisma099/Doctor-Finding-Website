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
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html">Form Mask </a></li>
<li><a href="form-validation.html" class="active">Form Validation </a></li>
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
<h3 class="page-title">Form Validation</h3>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Custom Bootstrap Form Validation</h5>
<p class="card-text">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your form. For server side validation <a href="https://getbootstrap.com/docs/5.0/forms/validation/" target="_blank">read full documentation</a>.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate>
<div class="form-row row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">First name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustom02">Last name</label>
<input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustomUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend">@</span>
<input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>
</div>
<div class="form-row row">
<div class="col-md-6 mb-3">
<label for="validationCustom03">City</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
<div class="invalid-feedback">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationCustom04">State</label>
<input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
 <div class="invalid-feedback">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationCustom05">Zip</label>
<input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
<div class="invalid-feedback">
Please provide a valid zip.
</div>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
<label class="form-check-label" for="invalidCheck">
Agree to terms and conditions
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Browser defaults</h5>
<p class="card-text">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form>
<div class="form-row row">
<div class="col-md-4 mb-3">
<label for="validationDefault01">First name</label>
<input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
</div>
<div class="col-md-4 mb-3">
<label for="validationDefault02">Last name</label>
<input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
</div>
<div class="col-md-4 mb-3">
<label for="validationDefaultUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend2">@</span>
<input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<div class="form-row row">
<div class="col-md-6 mb-3">
<label for="validationDefault03">City</label>
<input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
</div>
<div class="col-md-3 mb-3">
<label for="validationDefault04">State</label>
<input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
</div>
<div class="col-md-3 mb-3">
<label for="validationDefault05">Zip</label>
<input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
<label class="form-check-label" for="invalidCheck2">
Agree to terms and conditions
</label>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>
</div>
</div>


<div class="card">
 <div class="card-header">
<h5 class="card-title">Server side</h5>
<p class="card-text">We recommend using client side validation, but in case you require server side, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
</div>
<div class="card-body">
<form>
<div class="form-row row">
<div class="col-md-4 mb-3">
<label for="validationServer01">First name</label>
<input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationServer02">Last name</label>
<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationServerUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>
</div>
<div class="form-row row">
<div class="col-md-6 mb-3">
<label for="validationServer03">City</label>
<input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
<div class="invalid-feedback">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationServer04">State</label>
<input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
<div class="invalid-feedback">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationServer05">Zip</label>
<input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
<div class="invalid-feedback">
Please provide a valid zip.
</div>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
<label class="form-check-label" for="invalidCheck3">
Agree to terms and conditions
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Supported elements</h5>
<p class="card-text">Form validation styles are also available for bootstrap custom form controls.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="was-validated">
<div class="custom-control form-check mb-3">
<input type="checkbox" class="form-check-input" id="customControlValidation1" required>
<label class="form-check-label" for="customControlValidation1">Check this custom checkbox</label>
<div class="invalid-feedback">Example invalid feedback text</div>
</div>
<div class="custom-control form-check">
<input type="radio" class="form-check-input" id="customControlValidation2" name="radio-stacked" required>
<label class="form-check-label" for="customControlValidation2">Toggle this custom radio</label>
</div>
<div class="custom-control form-check mb-3">
<input type="radio" class="form-check-input" id="customControlValidation3" name="radio-stacked" required>
<label class="form-check-label" for="customControlValidation3">Or toggle this other custom radio</label>
<div class="invalid-feedback">More example invalid feedback text</div>
</div>
<div class="form-group">
<select class="form-select" required>
<option value="">Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
<div class="invalid-feedback">Example invalid custom select feedback</div>
</div>
<div class="form-group">
<input type="file" class="form-control" id="validatedCustomFile" required>
<div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Tooltips</h5>
<p class="card-text">You can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
</div>
<div class="card-body">
<form class="needs-validation" novalidate>
<div class="form-row row">
<div class="col-md-4 mb-3">
<label for="validationTooltip01">First name</label>
<input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
<div class="valid-tooltip">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltip02">Last name</label>
<input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
<div class="valid-tooltip">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltipUsername">Username</label>
<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" required>
<div class="invalid-tooltip">
Please choose a unique and valid username.
</div>
</div>
</div>
<div class="form-row row">
<div class="col-md-6 mb-3">
<label for="validationTooltip03">City</label>
<input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
<div class="invalid-tooltip">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip04">State</label>
<input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
<div class="invalid-tooltip">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip05">Zip</label>
<input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
 <div class="invalid-tooltip">
Please provide a valid zip.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>

</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="d7b2a05f92e5ac19c2e4641e-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="d7b2a05f92e5ac19c2e4641e-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="d7b2a05f92e5ac19c2e4641e-text/javascript"></script>

<script src="assets/js/form-validation.js" type="d7b2a05f92e5ac19c2e4641e-text/javascript"></script>

<script src="assets/js/script.js" type="d7b2a05f92e5ac19c2e4641e-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d7b2a05f92e5ac19c2e4641e-|49" defer=""></script></body>


</html>