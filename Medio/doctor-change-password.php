<!DOCTYPE html>
<html lang="en">
<?php
 include_once'header.php';


  ?>

<head>
<meta charset="utf-8">
<title>Medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/plugins/apex/apexcharts.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<?php
 include_once'header3.php';


  ?>



<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

<?php
 include_once'drsidebar.php';


  ?>

</div>
<div class="col-md-7 col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12 col-lg-6">
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

<form>

<div class="form-group form-focus">
<input  required name="password" id="password"  onkeyup="checkPasswordStrength(this.value)" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" type="Password" class="form-control floating">
<label class="focus-label">Password</label>
</div><div class="form-group form-focus">
<input required name="cpassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" type="Password" class="form-control floating">
<label class="focus-label">confirm Password</label>
</div><div id="password-strength"></div>
<div id="password-strength"></div>
<div class="text-end">
</div>
<button class="btn btn-primary w-100 btn-lg login-btn" name="submit" type="submit">change</button>
<div class="login-or">
<span class="or-line"></span>
</div>
<div class="row form-row social-login">


</div>
</form>
<script>
  function checkPasswordStrength(password) {
  var passwordStrengthLabel = document.getElementById("password-strength");
  var passwordStrength = 0;
  if (password.length >= 8) {
    passwordStrength += 1;
  }
  if (password.match(/[a-z]/)) {
    passwordStrength += 1;
  }
  if (password.match(/[A-Z]/)) {
    passwordStrength += 1;
  }
  if (password.match(/[0-9]/)) {
    passwordStrength += 1;
  }
  if (password.match(/[$@#&!]/)) {
    passwordStrength += 1;
  }
  var passwordStrengthText = "";
  switch (passwordStrength) {
    case 0:
      passwordStrengthText = "Weak";
      break;
    case 1:
      passwordStrengthText = "Weak";
      break;
    case 2:
      passwordStrengthText = "Moderate";
      break;
    case 3:
      passwordStrengthText = "Strong";
      break;
    case 4:
      passwordStrengthText = "Very Strong";
      break;
    case 5:
      passwordStrengthText = "Extremely Strong";
      break;
  }
  passwordStrengthLabel.innerHTML = passwordStrengthText;
}

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
</div>



<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/js/feather.min.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>

<script src="assets/js/script.js" type="97d544444ecf5f13e8a9aa50-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="97d544444ecf5f13e8a9aa50-|49" defer=""></script></body>

</html>