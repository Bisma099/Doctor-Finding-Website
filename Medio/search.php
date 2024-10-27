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

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div align="center" style="height: 100%" class="main-wrapper">

<?php
 include_once'header2.php';


  ?>





    <?php
include_once 'includes/dbh.inc.php'
?>

<div  align="center" style="margin-top: 10%;"class="col-md-12 col-lg-8 col-xl-9">

<div class="card" >
<div class="card-body">
<div class="card-body">
<div class="filter-widget">

</div>
<h4>Gender</h4>
<div align="center">
 <form action="searched.php" method="POST" style=" align-items: center;">
     <select name="gender" class="form-select form-control" style="width: 30%;" >
        <option  name="Gender" class="form-select form-control" style="width: 30%;"  value="male">male</option>
     <option name="Gender" class="form-select form-control"   value="female">female</option> 
     </select>
     <br>
     <h4>Speciality</h4>

     <br>
<select name="special" style="width:400px ;" class="form-select form-control">
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
    
</select>
<br>
<button class='btn btn-primary  btn-lg login-btn' name='submit' type='submit'>search</button>

 </form>
</div>
</div>
</div>
</div>













<div class="load-more text-center">
</div>
</div>
</div>
</div>
</div>

<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="27342a20d530600749cfb85f-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/moment.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/plugins/fancybox/jquery.fancybox.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/feather.min.js" type="27342a20d530600749cfb85f-text/javascript"></script>

<script src="assets/js/script.js" type="27342a20d530600749cfb85f-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="27342a20d530600749cfb85f-|49" defer=""></script></body>

</html>