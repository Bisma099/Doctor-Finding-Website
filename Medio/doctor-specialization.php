<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<?php
 include_once'header.php';

 include_once'includes/dbh.inc.php';
  ?>

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.min.css">

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
<div class="card services-card">
<div class="card-body">
<h4 class="card-title">Services and Specialization</h4>
<div class="form-group">
       <?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="specialsaved") {
                            
                              echo "<h1 style='text-decoration-color: lightgreen;'>speciality saved</h1>";
                          }
                          
                         
                             
                           
                      }


                          ?>
    <form action="includes/drsettings.inc.php" method="POST" >
<label>Services</label>
<input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services" name="services"  id="services">
<small class="form-text text-muted">Note : Type & Press enter to add new services</small>
</div>
<div class="form-group form-focus">
<select name="special" class="form-select form-control" >
    <?php



$sql="SELECT * FROM specials ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<option value='".$row['img']."'>".$row['img']."</option>");
          echo" ";
         //The search 2;
}


}
else{
    echo("no skill added");
          
}



 




                              ?>

  <option value='none'></option>

</select>
<br>
<button class="btn btn-primary btn-lg login-btn" onclick="showAlert()" name="submit" type="submit">save</button>

</form>
</div>
</div>


<br>
<div class="card-body">
     <?php
                          if (isset($_GET["error"])) {
                            if ($_GET["error"]=="educationsaved") {
                            
                              echo "<h1 style='text-decoration-color: lightgreen;'>education saved</h1>";
                          }
                            if ($_GET["error"]=="passwordsdontmatch") {
                            
                              echo "<h1>Passwords dont match </h1>";
                          }
                         
                             
                           
                      }


                          ?>
<h4 class="card-title">Education</h4>
<div class="education-info">
<div class="row form-row education-cont">
<div class="col-12 col-md-10 col-lg-11">
<div class="row form-row">
<div class="col-12 col-md-6 col-lg-4">
<div class="form-group">
      
    <form action="includes/drsettings.inc.php" method="POST" >
<label>Degree</label>
<input name="degree" type="text" class="form-control">
</div>
</div>
<div class="col-12 col-md-6 col-lg-4">
<div class="form-group">
<label>College/Institute</label>
<input name="inst" type="text" class="form-control">
</div>
</div>
<div class="col-12 col-md-6 col-lg-4">
<div class="form-group">
<label>Year of Completion</label>
<input name="yoc" type="number" class="form-control">
<br>

</div>
</div>
<button class="btn btn-primary btn-lg login-btn" onclick="showAlert()" name="submit" type="submit">save</button>

</form>
 <script>
    function showAlert() {
      alert("your information has been saved");
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
</div>


<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/feather.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/dropzone/dropzone.min.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/profile-settings.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>

<script src="assets/js/script.js" type="ec3053ffb74f1b8f3edcafe4-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ec3053ffb74f1b8f3edcafe4-|49" defer=""></script></body>

</html>