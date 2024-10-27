<?php
include_once 'header1.php'
?>


 <?php
include_once 'includes/dbh.inc.php'
?>

<div class="content">
<div class="container">
<div class="row">
<div class="col-12">
<div class="terms-content">
<div class="terms-text">
<h3>Terms and Conditions</h3>
<p><?php



$sql="SELECT * FROM cms ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("".$row['terms']."");
          echo" ";
         //The search 2;
}


}
else{
    echo("no conditions available");
          
}



 




                              ?></p>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="e303f60b19ffefe3d12b2589-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="e303f60b19ffefe3d12b2589-text/javascript"></script>

<script src="assets/js/feather.min.js" type="e303f60b19ffefe3d12b2589-text/javascript"></script>

<script src="assets/js/script.js" type="e303f60b19ffefe3d12b2589-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e303f60b19ffefe3d12b2589-|49" defer=""></script></body>

</html>