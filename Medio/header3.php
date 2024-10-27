<header class="header">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="doctor-dashboard.php" class="navbar-brand logo">
<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="doctor-dashboard.php" class="menu-logo">
<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">

<li class="has-submenu active">
<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li class="active"><a href="doctor-dashboard.php">Doctor Dashboard</a></li>
<li><a href="appointments.php">Appointments</a></li>
<li><a href="available-timings.php">Available Timing</a></li>
<li><a href="my-patients.php">Patients List</a></li>
<li><a href="doctor-profile-settings.php">Profile Settings</a></li>


 </ul>
</li>




<li class="login-link">
<a href="login.php">Login / Signup</a>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item contact-item">


</li>

<li class="nav-item dropdown has-arrow logged-item">
<form action="includes/logout.inc.php" method="POST">

      <button type="submit" class="btn btn-default btn-sm" style="text-decoration-color: red;">
          <span class="glyphicon glyphicon-log-out text-dange" style="text-decoration-color: red;"></span> Log out
        </button>
        <i class="fa fa-power-off"></i>
</form>
<div class="dropdown-menu dropdown-menu-end">
<div class="user-header">
<div class="avatar avatar-sm">

</div>
</div>
<a class="dropdown-item" href="doctor-dashboard.php">Dashboard</a>
<a class="dropdown-item" href="doctor-profile-settings.php">Profile Settings</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</li>

</ul>
</nav>
</header>