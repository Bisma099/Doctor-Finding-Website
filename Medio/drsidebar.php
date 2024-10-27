
<div class="profile-sidebar">
<div class="widget-profile pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-doc-img">
  <?php 
echo("<img src='admin1/uploads/". $_SESSION['profile']."' alt='User Image'>");

    ?>
</a>
<div class="profile-det-info">
<h3>Dr.<?php  
print( $_SESSION['username']);
 $_SESSION['username'];
?></h3>
<div class="patient-details">
<h5 class="mb-0"><?php  
print( $_SESSION['degree']);
 $_SESSION['degree'];
?></h5>
<h5 class="mb-0"><i class="feather-credit-card"></i> <?php  
print( $_SESSION['bal']);
 $_SESSION['bal'];
?></h5>
</div>
</div>
</div>
</div>
<div class="dashboard-widget">
<nav class="dashboard-menu">
<ul>
<li class="active">
<a href="doctor-dashboard.php">
<i class="fas fa-columns"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="appointments.php">
<i class="fas fa-calendar-check"></i>
<span>Appointments</span>
</a>
</li>
   <li>
<a href="tcs.php">
<i class="feather-credit-card"></i>
<span>withdraw balance</span>
</a>
</li>

<li>
<a href="my-patients.php">
<i class="fas fa-user-injured"></i>
<span>My Patients</span>
</a>
</li>

<li>
<a href="license.php">
<i class="fas fa-file"></i>
<span>license</span>
</a>
</li>

<li>
<a href="doctor-profile-settings.php">
<i class="fas fa-user-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="available-timings.php">
<i class="fas fa-clock"></i>
<span>Available Timings</span>
</a>
</li>
<li>
<a href="doctor-change-password.php">
<i class="fas fa-lock"></i>
<span>Change Password</span>
</a>
</li>
<li>
<a href="includes/Logout.inc.php">
<i class="fas fa-sign-out-alt"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
</div>