

<?php
include_once 'header1.php'
?>
<div class="row">
      <?php
include_once 'includes/dbh.inc.php'
?>



<link rel="stylesheet" href="style.css">
    

<div style="height: auto;background-color: white;">  </div>


    <?php

if (isset($_POST['special'])) {

$search=mysqli_real_escape_string($conn,$_POST['special']);
$searched=mysqli_real_escape_string($conn,$_POST['gender']);
$searching=mysqli_real_escape_string($conn,$_POST['location']);
$_SESSION['special']=$search;
$_SESSION['gender']=$searched;
$sql="SELECT * FROM apttime WHERE special='$search' and gender='$searched' and address='$searching' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
if (empty($searched)) {
$queryresult=0;
if ($queryresult=0) {
    
         echo("");
          
}



}


if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<div style='background-color: white; '><div class='card' >
<div  class='card-body'>
<div class='doctor-widget'>
<div class='doc-info-left'>
<div class='doctor-img'>
<a href='doctor-profile.html'>
<img src='admin1/uploads/". $row['profile']."' class='img-fluid' alt='User Image'>
</a>
</div>
<div class='doc-info-cont'>
<h4 class='doc-name'><a href='doctor-profile.php'>". $row['drname']."</a></h4>
<p class='doc-speciality'>". $row['special']."</p>
<h5 class='doc-department'>". $row['degree']."</h5>

<div class='clinic-details'>

</div>
<div class='clinic-services'>
<span>". $row['service']."</span>
</div>
</div>
</div>
<div class='doc-info-right'>
<div class='clini-infos'>
<ul>
<li><i class='far fa-thumbs-up'></i> 100%</li>
<li><i class='far fa-comment'></i> 35 Feedback</li>
<li><i class='fas fa-map-marker-alt'></i>". $row['address']."</li>
</ul>
</div>
<div class='clinic-booking'>
<a class='view-pro-btn' href='doctor-profile2.php?title=". $row['drid']."'>View Profile</a>
<a class='apt-btn' href='register.php?title=booking'>Book Appointment</a>
</div>
</div>
</div>
</div>
</div>");
          
         //The search 2;
}




}


else{

    echo("
           <div class='content' style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center'>
  <h2 class='header'>
    Sorry
  </h2>

  <p>
    <b>There is no Doctor avaible.<b>
  </p>
  <div class='btns'>
    <a href='index.php'>return home</a>
  </div>
</div>

  ");
          
}


}
 

else{
     
          
}



                              ?>
</div>
</div>
</div>
<div style=' height: 80%;background-color: auto'>  </div>
</div>
</div>
</div>
</div>
</section>

















<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/slick.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/aos.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>

<script src="assets/js/script.js" type="5eb0fe4df6c26d064b313edf-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="5eb0fe4df6c26d064b313edf-|49" defer=""></script></body>

</html>