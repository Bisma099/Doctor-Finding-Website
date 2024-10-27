

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
<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
    <?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="emptyinput") {
                            
                              echo "<h1>fill in all the fields </h1>";
                          }
                            if ($_GET["error"]=="wronglogin") {
                            
                              echo "<h1>incorrect password/email </h1>";
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
<h3>Login <span>Doctor</span></h3>
 <h3><a href="login.php">Are you a patient?</a></h3>
</div>
<form action="includes/drlogin.inc.php" method="POST">
<div class="form-group form-focus">
<input name="email" type="email" class="form-control floating">
<label class="focus-label">Email</label>
</div>
<div class="form-group form-focus">
<input name="password" type="password" class="form-control floating">
<label class="focus-label">Password</label>
</div>
<div class="text-end">
<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
</div>
<button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Login</button>
<div class="login-or">
<span class="or-line"></span>
</div>

<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
</form>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="1e0b55c09bb3b7db6e2e50bf-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="1e0b55c09bb3b7db6e2e50bf-text/javascript"></script>

<script src="assets/js/feather.min.js" type="1e0b55c09bb3b7db6e2e50bf-text/javascript"></script>

<script src="assets/js/script.js" type="1e0b55c09bb3b7db6e2e50bf-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1e0b55c09bb3b7db6e2e50bf-|49" defer=""></script></body>

</html>
