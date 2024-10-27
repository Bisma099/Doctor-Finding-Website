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

<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<?php
 include_once'header2.php';


  ?>
   <?php
include_once 'includes/dbh.inc.php'
?>


<?php

$title=mysqli_real_escape_string($conn, $_GET['title']);






$sql="SELECT * FROM doctor WHERE id= '$title' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         $_SESSION['drname']=$row['username'];
         $_SESSION['special']=$row['specialization'];
         $_SESSION['service']=$row['service']; 
         $_SESSION['dprofile']=$row['profile'];
          $_SESSION['dcontact']=$row['numbers']; 
         $_SESSION['education']=$row['college'];
          $_SESSION['ddegree']=$row['degree'];
           $_SESSION['daddress']=$row['address'];
                      $_SESSION['yearofc']=$row['yearofc'];

         //The search 2;
}


}
else{
    echo("");
          
}



 




                         

  ?>
  <?php



  ?>
   
   

<div class="content">
<div class="container">

<div class="card">
<div class="card-body">
<div class="doctor-widget">
<div class="doc-info-left">
<div class="doctor-img">
    <?php
        echo("<img src='admin1/uploads/".$_SESSION['dprofile']."' class='img-fluid' alt='User Image'>
")

      ?>
</div>
<div class="doc-info-cont">
<h4 class="doc-name"><?php  
print( $_SESSION['drname']);
 $_SESSION['drname'];
?></h4>
<p class="doc-speciality"><?php  
print( $_SESSION['ddegree']);
 $_SESSION['ddegree'];
?></p>
<p class="doc-department"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality"><?php  
print( $_SESSION['special']);
 $_SESSION['special'];
?></p>

<div class="clinic-details">
<p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?php  
print( $_SESSION['daddress']);
 $_SESSION['daddress'];
?></p>

</div>
<div class="clinic-services">
<span><?php  
print( $_SESSION['service']);
 $_SESSION['service'];
?></span>

</div>
</div>
</div>
<div class="doc-info-right">
<div class="clini-infos">
<ul>

<li><i class="far fa-phone"></i><?php  
print( $_SESSION['dcontact']);
 $_SESSION['dcontact'];
?></li>
<li><i class="fas fa-map-marker-alt"></i><?php  
print( $_SESSION['daddress']);
 $_SESSION['daddress'];
?></li>
</ul>
</div>


</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body pt-0">

<nav class="user-tabs mb-4">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item">
<a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">Overview</a>
</li>


</ul>
</nav>


<div class="tab-content pt-0">

<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
<div class="row">
<div class="col-md-12 col-lg-9">

<div class="widget about-widget">
<h4 class="widget-title">About Me</h4>
<p> </p>
</div>


<div class="widget education-widget">
<h4 class="widget-title">Education</h4>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name"><?php  
print( $_SESSION['education']);
 $_SESSION['education'];
?></a>
<div><?php  
print( $_SESSION['ddegree']);
 $_SESSION['ddegree'];
?></div>
<span class="time"><?php  
print( $_SESSION['yearofc']);
 $_SESSION['yearofc'];
?></span>
</div>
</div>
</li>
<li>

</li>
</ul>
</div>
</div>


<div class="widget experience-widget">

</div>




<div class="service-list">
<h4>Services</h4>
<ul class="clearfix">
<li><?php  
print( $_SESSION['service']);
 $_SESSION['service'];
?></li>

</ul>
</div>


<div class="service-list">
<h4>Specializations</h4>
<ul class="clearfix">
<li><?php  
print( $_SESSION['ddegree']);
 $_SESSION['ddegree'];
?></li>

</ul>
</div>

<div role="tabpanel" id="doc_reviews" >

<div class="service-list">
<h4>Reviews</h4>

<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "medicos";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL query to fetch data from doctor_reviews table
$sql = "SELECT doctor_name, rating, title, reviews, id, status, patient, terms_accept FROM doctor_reviews where drid=$title and status='approved'";

// Execute query
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<style>
  /* Style for the review count stars */
  .rating {
    display: inline-block;
    font-size: 18px;
  }
  .rating i {
    color: #FFD700; /* Golden yellow */
  }
  .rating .filled {
    color: #FFD700;
  }

  /* Style for the comment content */
  .comment-content {
    font-size: 16px;
    margin-top: 10px;
    border: 2px solid transparent;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0px 0px 5px 1px #FFF;
    transition: all 0.3s ease-in-out;
  }
  .comment-content:hover {
    border-color: #FFF;
    box-shadow: 0px 0px 10px 2px grey;
  }
</style>

Patient: " . $row["patient"] . "<br>";
    // Display rating in stars format
    echo "<div class='review-count rating'> ";
    for ($i = 1; $i <= 5; $i++) {
      if ($i <= $row["rating"]) {
    
        echo "
<i class='fas fa-star filled'></i>
";
      } else {
        echo "☆";
      }
    }
    echo "</div>";
    echo "review: " . $row["title"] . "<br>";
    echo "<p class='comment-content'>
comment: " . $row["reviews"] . "<br></p>";
    echo "<br>";
  }
} else {
  echo "not reviewed.";
}

// Close connection
mysqli_close($conn);
?>
</div>
</div>

</div>



</div>
<div class="write-review">
<h4>Write a review for <strong><?php  
print( $_SESSION['drname']);
 $_SESSION['drname'];
$_SESSION['drname'];

?></strong></h4>

<form action="includes/reviewed.php?error=<?php print( $_SESSION['username']); ?>
 & title=<?php print($title); ?> & dr=<?php print($_SESSION['drname']); ?>

"method="post">
<div class="form-group">
<label>Review</label>
<div class="star-rating">
<input id="star-5" type="radio" name="rating" value="5">
<label for="star-5" title="5 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-4" type="radio" name="rating" value="4">
<label for="star-4" title="4 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-3" type="radio" name="rating" value="3">
<label for="star-3" title="3 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-2" type="radio" name="rating" value="2">
<label for="star-2" title="2 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-1" type="radio" name="rating" value="1">
<label for="star-1" title="1 star">
<i class="active fa fa-star"></i>
</label>
</div>
</div>
<div class="form-group">
<label>Title of your review</label>
<input name="title" class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
</div>
<div class="form-group">
<label>Your review</label>
<textarea name="review" id="review_desc" maxlength="100" class="form-control"></textarea>
<div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
</div>
<hr>
<div class="form-group">
<div class="terms-accept">
<div class="custom-checkbox">
<input type="checkbox" name="terms_accept" id="terms_accept">
<label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
</div>
</div>
</div>
<div class="submit-section">
<button type="submit" class="btn btn-primary submit-btn">Add Review</button>
</div>
</form>

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


<div class="modal fade call-modal" id="voice_call">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">

<div class="call-box incoming-box">
<div class="call-wrapper">
<div class="call-inner">
<div class="call-user">
<img alt="User Image" src="assets/img/doctors/doctor-thumb-02.jpg" class="call-avatar">
<h4>Dr. Darren Elder</h4>
<span>Connecting...</span>
</div>
<div class="call-items">
<a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
<a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>


<div class="modal fade call-modal" id="video_call">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">

<div class="call-box incoming-box">
<div class="call-wrapper">
<div class="call-inner">
<div class="call-user">
<img class="call-avatar" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
<h4>Dr. Darren Elder</h4>
<span>Calling ...</span>
</div>
<div class="call-items">
<a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
<a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="82391557f07f821fd5151986-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="82391557f07f821fd5151986-text/javascript"></script>

<script src="assets/plugins/fancybox/jquery.fancybox.min.js" type="82391557f07f821fd5151986-text/javascript"></script>

<script src="assets/js/feather.min.js" type="82391557f07f821fd5151986-text/javascript"></script>

<script src="assets/js/script.js" type="82391557f07f821fd5151986-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="82391557f07f821fd5151986-|49" defer=""></script></body>

</html>