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
<?php
include_once 'header1.php'
?>





<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">
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
<h3>Doctor Register <a href="register.php" class="">Not a Doctor?</a></h3>
</div>

<form action="includes/drsignup.inc.php" method="POST">
<div class="form-group form-focus">
<input  required name="username" type="text" class="form-control floating">
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
<input  required name="password" id="passwordInput" onkeyup="checkPasswordOnKey(event, passwordLabel)"  pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" type="Password" class="form-control floating">
<label class="focus-label">Password</label>
</div><div class="form-group form-focus">
<input required name="cpassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" type="Password" class="form-control floating">
<label class="focus-label">confirm Password</label>
</div><div id="password-strength">
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
<div id="password-strength"></div>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="d69f013ec9cc4d295bc945f1-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="d69f013ec9cc4d295bc945f1-text/javascript"></script>

<script src="assets/js/feather.min.js" type="d69f013ec9cc4d295bc945f1-text/javascript"></script>

<script src="assets/js/script.js" type="d69f013ec9cc4d295bc945f1-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d69f013ec9cc4d295bc945f1-|49" defer=""></script></body>

</html>