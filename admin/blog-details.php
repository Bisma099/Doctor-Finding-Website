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
<li class="submenu active">
<a href="#"><i class="feather-grid"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="active-blog.html">Blogs</a></li>
<li><a href="blog-details.html" class="active">Blog Details</a></li>
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
<div class="row justify-content-center">
<div class="col-lg-10 col-xl-8">

<div class="blog-view">
<div class="blog-single-post">
<a href="active-blog.html" class="back-btn"><i class="feather-chevron-left"></i> Back</a>
<div class="blog-image">
<a href="javascript:void(0);"><img alt="" src="assets/img/blog/blog-01.jpg" class="img-fluid"></a>
</div>
<h3 class="blog-title">What are the benefits of Online Doctor Booking?</h3>
<div class="blog-info">
<div class="post-list">
<ul>
<li>
<div class="post-author">
<a href="profile.html"><img src="assets/img/profiles/avatar-02.jpg" alt="Post Author"> <span>by Dr. Lester </span></a>
</div>
</li>
<li><i class="feather-clock"></i> 40 Comments</li>
<li><i class="feather-message-square"></i> 40 Comments</li>
<li><i class="feather-grid"></i> Topical chemotherapy, Gynacologist</li>
</ul>
</div>
</div>
<div class="blog-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
</div>
</div>

<div class="card author-widget clearfix">
<div class="card-header">
<h4 class="card-title">About Author</h4>
</div>
<div class="card-body">
<div class="about-author">
<div class="about-author-img">
<div class="author-img-wrap">
<a href="profile.html"><img class="img-fluid" alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</div>
</div>
<div class="author-details">
<a href="profile.html" class="blog-author-name">Dr. Darren Elder <span>Orthopaedics, Male, 40 Years Old</span></a>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
</div>
</div>
</div>
</div>


<div class="card blog-comments">
<div class="card-header">
<h4 class="card-title">Comments (5)</h4>
</div>
<div class="card-body pb-0">
<ul class="comments-list">
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/profiles/avatar-06.jpg">
</div>
<div class="comment-block">
<div class="comment-by">
<h5 class="blog-author-name">Michelle Fairfax <span class="blog-date"> <i class="feather-clock me-2"></i>Dec 6, 2017</span></h5>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<a class="comment-btn" href="#">
<img class="me-1" alt="icon" src="assets/img/icon/reply-icon.png"> Reply
</a>
</div>
</div>
<ul class="comments-list reply">
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/profiles/avatar-07.jpg">
</div>
<div class="comment-block">
<div class="comment-by">
<h5 class="blog-author-name">Gina Moore <span class="blog-date"> <i class="feather-clock me-2"></i> 6 Dec 2022</span></h5>
</div>
<p>gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur</p>
<a class="comment-btn" href="#">
<img class="me-1" alt="icon" src="assets/img/icon/reply-icon.png"> Reply
</a>
</div>
</div>
</li>
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/profiles/avatar-08.jpg">
</div>
<div class="comment-block">
<div class="comment-by">
 <h5 class="blog-author-name">Carl Kelly <span class="blog-date"> <i class="feather-clock me-2"></i> 7 Dec 2022</span></h5>
</div>
<p> pellentesque urna varius vitae, gravida pellentesque urna consectetur adipiscing elit. Nam viverra euismod.</p>
<a class="comment-btn" href="#">
<img class="me-1" alt="icon" src="assets/img/icon/reply-icon.png"> Reply
</a>
</div>
</div>
</li>
</ul>
</li>
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/profiles/avatar-09.jpg">
</div>
<div class="comment-block">
<div class="comment-by">
<h5 class="blog-author-name">Elsie Gilley <span class="blog-date"> <i class="feather-clock me-2"></i> 7 Dec 2022</span></h5>
</div>
<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
</div>
</div>
</li>
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/profiles/avatar-10.jpg">
</div>
<div class="comment-block">
<div class="comment-by">
<h5 class="blog-author-name">Joan Gardner <span class="blog-date"> <i class="feather-clock me-2"></i> 12 Dec 2022</span></h5>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<a class="comment-btn" href="#">
<img class="me-1" alt="icon" src="assets/img/icon/reply-icon.png"> Reply
</a>
</div>
</div>
</li>
</ul>
</div>
</div>


<div class="card new-comment clearfix">
<div class="card-header">
<h4 class="card-title">Leave Comment</h4>
</div>
<div class="card-body">
<form>
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Name <span class="text-danger">*</span></label>
</div>
<div class="form-group form-focus">
<input type="email" class="form-control floating">
<label class="focus-label">Your Email Address <span class="text-danger">*</span></label>
</div>
<div class="form-group">
<textarea rows="4" class="form-control bg-grey" placeholder="Comments"></textarea>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn" type="submit">Submit</button>
</div>
</form>
</div>
</div>

<div class="card blog-share clearfix">
<div class="card-header">
<h4 class="card-title">Share the post</h4>
</div>
<div class="card-body">
<ul class="social-share">
<li><a href="#"><i class="feather-twitter"></i></a></li>
<li><a href="#"><i class="feather-facebook"></i></a></li>
<li><a href="#"><i class="feather-linkedin"></i></a></li>
<li><a href="#"><i class="feather-instagram"></i></a></li>
<li><a href="#"><i class="feather-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js" type="3206125b7fa4717c86462ccd-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="3206125b7fa4717c86462ccd-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="3206125b7fa4717c86462ccd-text/javascript"></script>

<script src="assets/js/moment.min.js" type="3206125b7fa4717c86462ccd-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="3206125b7fa4717c86462ccd-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="3206125b7fa4717c86462ccd-text/javascript"></script>

<script src="assets/js/script.js" type="3206125b7fa4717c86462ccd-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="3206125b7fa4717c86462ccd-|49" defer=""></script></body>


</html>