<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


  ?>
<head>
<meta charset="utf-8">
<title>medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">
<?php
 include_once'header2.php';


  ?>





<div class="content">
<div class="container-fluid">
<div class="row">
<?php
 include_once'psidebar.php';


  ?>
<div class="col-md-7 col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12 col-lg-6" >
<?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="passchanged") {
                            
                              echo "<h1 style='text-decoration-color: lightgreen;'>password change succesful </h1>";
                          }
                            if ($_GET["error"]=="passwordsdontmatch") {
                            
                              echo "<h1>Passwords dont match </h1>";
                          }
                         
                             
                           
                      }


                          ?>
<form action="includes/settings.inc.php" method="POST">

<div class="form-group">
<label>New Password</label>
<input name="password" type="password" id="passwordInput" onkeyup="checkPasswordOnKey(event, passwordLabel)" class="form-control">
</div>
<div class="form-group">
<label>Confirm Password</label>
<input name="cpassword"  type="password" class="form-control">
<label id="passwordLabel"></label>

</div>
<div class="submit-section">
<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
</div>
</form>
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
</script>
</div>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/js/feather.min.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>

<script src="assets/js/script.js" type="f9734eea5d120d96a40e9a8e-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="f9734eea5d120d96a40e9a8e-|49" defer=""></script></body>

</html>