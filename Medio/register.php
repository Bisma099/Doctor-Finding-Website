<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link href="assets/img/favicon.jpg.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="account-page">

<div class="main-wrapper">

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
<a href="index.php" class="navbar-brand logo">
<img src="assets/img/favicon.jpg.png" class="img-fluid" alt="Logo">
<img src="assets/img/headerlog.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index.php" class="menu-logo">
<img src="assets/img/favicon.jpg.png" class="img-fluid" alt="Logo">
</a>

</div>

</li>


</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item contact-item">
<div class="header-contact-img">
</div>
<div class="header-contact-detail">
</div>
</li>
<li class="nav-item">
 <a class="nav-link header-login" href="login.php">login / Signup </a>
</li>
</ul>
</nav>
 <?php
 if (isset($_GET["title"])) {
 if ($_GET['title']=="booking") {
   echo '<script type="text/javascript">
       window.onload = function () { alert("dear user in order to book appointment you need to signup first"); } 
</script>'; 

 }
 if ($_GET['title']=="check") {
   echo '<script type="text/javascript">
       window.onload = function () { alert("dear user in order to visit doctor profile you need to signup first"); } 
</script>'; 

 }
}
?> 
</header>



<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
  <?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="emptyinput") {
                            
                              echo "<h1>fill in all the fields </h1>";
                          }
                            if ($_GET["error"]=="passwordsdontmatch") {
                            
                              echo "<h1>Passwords dont match </h1>";
                          }
                          if ($_GET["error"]=="invalidusername") {
                            
                              echo "<h1 >invalid username format</h1>";
                          }
                             if ($_GET["error"]=="usernametaken/number") {
                            
                              echo "<h1>username/number already in use</h1>";
                          }
                             if ($_GET["error"]=="none") {
                            
                              echo "<h1 class='text-success'>your signup is sucessful  </h1>";
                          }
                      }


                          ?>
                          
<h3>Patient Register <a href="doctor-register.php">Are you a Doctor?</a></h3>
</div>


<form action="includes/users.php" method="POST">
<div class="form-group form-focus">
<input required name="username" type="text" class="form-control floating">
<label class="focus-label">Name</label>
</div>
<div class="form-group form-focus">
<input required type="text" name="number" class="form-control floating" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
<label class="focus-label">Mobile Number</label>
</div>
<div class="form-group form-focus">
<input required name="email" type="email" class="form-control floating">
<label class="focus-label">Your Email Address</label>
</div>
<div class="form-group form-focus">
<select name="Gender" class="form-select form-control" >
<option value="">Gender</option>
<option value="Male">Male</option>
<option value="female">Female</option>
</select>
</div>
<div class="form-group form-focus">
<input type="date" id="my-date" name="dob" max="<?php echo date('Y-m-d'); ?>" required class="form-control floating">
</div>
<div class="form-group form-focus">
<input required name="password" type="Password" id="passwordInput" onkeyup="checkPasswordOnKey(event, passwordLabel)" class="form-control floating" pattern="^(?=.*[a-z])(?=.*[A-Z]))$">
<label class="focus-label">Password</label>
</div><div class="form-group form-focus">
<input required name="cpassword" type="Password" class="form-control floating" pattern="^(?=.*[a-z])(?=.*[A-Z]))$">
<label class="focus-label">confirm Password</label>
</div>
<div id="password-strength">
<label id="passwordLabel"></label>
  <script>
function checkPasswordOnKey(event, label) {
  var password = event.target.value;
  var hasLength = password.length >= 8;
  var hasSpecialChar = /[!@#$%^&*]/.test(password);
  var hasUppercase = /[A-Z]/.test(password);
  
  if (!hasLength) {
    label.textContent = "Password must be at least 8 characters long.";
    label.style.color = "red";
  } else if (!hasSpecialChar) {
    label.textContent = "Password must contain a special character (!@#$%^&*).";
    label.style.color = "red";
  } else if (!hasUppercase) {
    label.textContent = "Password must contain an uppercase letter.";
    label.style.color = "red";
  } else {
    label.textContent = "Password meets requirements.";
    label.style.color = "green";
  }
}

var passwordInput = document.getElementById("passwordInput");
var passwordLabel = document.getElementById("passwordLabel");

passwordInput.onkeyup = function(event) {
  checkPasswordOnKey(event, passwordLabel);
};
</script></div>
<div class="text-end">
<a class="forgot-link" href="login.php">Already have an account?</a>
</div>
<button class="btn btn-primary w-100 btn-lg login-btn" name="submit" type="submit">Signup</button>
<div class="login-or">
<span class="or-line"></span>
</div>
<div class="row form-row social-login">


</div>
</form>
<script>
 

function myFunction() {
  var x = document.getElementById("myDate").max;
  document.getElementById("demo").innerHTML = x;
}
</script>

</div>
</div>
</div>

</div>
</div>
</div>
</div>

<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="e115ea10ba9415631cc2d6df-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="e115ea10ba9415631cc2d6df-text/javascript"></script>

<script src="assets/js/feather.min.js" type="e115ea10ba9415631cc2d6df-text/javascript"></script>

<script src="assets/js/script.js" type="e115ea10ba9415631cc2d6df-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e115ea10ba9415631cc2d6df-|49" defer=""></script></body>

</html>