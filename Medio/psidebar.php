
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
<div class="profile-sidebar">
<div class="widget-profile pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-doc-img">
    <?php 
echo("<img src='admin1/upload/". $_SESSION['profile']."' alt='User Image'>");

    ?>
</a>
<div class="profile-det-info">
<h3><?php  
print( $_SESSION['username']);
 $_SESSION['username'];
?></h3>
<div class="patient-details">

<h5 class="mb-0"><i class=""></i> <?php  
print( $_SESSION['Address']);
 $_SESSION['Address'];
?></h5>
</div>
</div>
</div>
</div>
<div class="dashboard-widget">
<nav class="dashboard-menu">
<ul>
    
<li>
<a href="search.php">
<i class="fas fa-search"></i>
<span>search doctor</span>
</a>
</li>
<li>
<a href="patient-profile.php">
<i class="fas fa-user"></i>
<span>dashboard</span>
</a>
</li>
<li class="">
<a href="profile-settings.php">
<i class="fas fa-user-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="change-password.php">
<i class="fas fa-lock"></i>
<span>Change Password</span>
</a>
</li>
<li>
<a href="testimony.php">
<i class="fas fa-file"></i>
<span>testimony</span>
</a>
</li>
<li>
<a href="includes/logout.inc.php">
<i class="fas fa-sign-out-alt"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
</div>