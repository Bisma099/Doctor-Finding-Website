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
 include_once'header3.php';


  ?>
   <?php
include_once 'includes/dbh.inc.php'
?>


<?php




$search=mysqli_real_escape_string($conn,$_GET['title']);

$sql="SELECT * FROM patient WHERE id='$search' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         $_SESSION['drname']=$row['username'];
         $_SESSION['dprofile']=$row['profile'];
          $_SESSION['dcontact']=$row['numbers']; 
           $_SESSION['daddress']=$row['address'];
 $_SESSION['ddob']=$row['dob'];

         //The search 2;
}


}
else{
          
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
        echo("<img src='admin1/upload/".$_SESSION['dprofile']."' class='img-fluid' alt='User Image'>
")

      ?>
</div>
<div class="doc-info-cont">
<h4 class="doc-name"><?php  
print( $_SESSION['drname']);
 $_SESSION['drname'];
?></h4>



<div class="clinic-details">


</div>

</div>
<div class="doc-info-right">
<div class="clini-infos">
<ul>

<li><i class="far fa-phone"></i><?php  
print( $_SESSION['dcontact']);
 $_SESSION['dcontact'];
?></li>
<li><i class="far fa-phone"></i><?php  
print( $_SESSION['ddob']);
 $_SESSION['ddob'];
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
<h4 class="widget-title">patient appointment history</h4>

<div id="pat_appointments" class="tab-pane fade show active">
<div class="card card-table mb-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Doctor</th>
<th>Appt Date</th>
<th>Appt Type</th>
<th>Status</th>
<th></th>
</tr>

<?php



$search=mysqli_real_escape_string($conn,$_GET['title']);

$sql="SELECT * FROM bookedapt WHERE pid='$search' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>
<h2 class='table-avatar'>
<a href='patient-profile.html' class='avatar avatar-m me-2'><img class='avatar-img' src='admin1/uploads/".$row['dprofile']."' alt='User Image'></a>
<a href='profile.php?title=".$row['pid']." error=".$row['drid']."'>".$row['drname']." <span>".$row['drid']."</span></a>
</h2>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>".$row['dated']."</h6>
<p class='mb-0'>clinic</p>
</div>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>in person</h6>
<p class='mb-0'>clinic</p>
</div>
</td>
<td>
<div class='consult-type d-flex flex-column'>
<h6 class='mb-0'>Status</h6>
<p class='mb-0'>".$row['status']." </p>
</div>
</td>
</tr> ");
          echo" ";
         //The search 2;
}


}
else{
    echo("");
          
}



 




                              ?>
</thead>

</table>
</div>
</div>
</div>
</div>

</div>
















</div>
</div>
</div>


<div role="tabpanel" id="doc_locations" class="tab-pane fade">

<div class="location-list">
<div class="row">

<div class="col-md-6">
<div class="clinic-content">
<h4 class="clinic-name"><a href="#">Smile Cute Dental Care Center</a></h4>
<p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(4)</span>
</div>
<div class="clinic-details mb-0">
<h5 class="clinic-direction"> <i class="fas fa-map-marker-alt"></i><?php
print( $_SESSION['daddress']);
 $_SESSION['daddress'];

?>
<ul>

</ul>
</div>
</div>
</div>


<div class="col-md-4">
<div class="clinic-timing">
<div>
<p class="timings-days">
<span> Mon - Sat </span>
</p>
<p class="timings-times">
<span>10:00 AM - 2:00 PM</span>
<span>4:00 PM - 9:00 PM</span>
</p>
</div>
<div>
<p class="timings-days">
<span>Sun</span>
</p>
<p class="timings-times">
<span>10:00 AM - 2:00 PM</span>
</p>
</div>
</div>
</div>

<div class="col-md-2">
<div class="consult-price">
$250
</div>
</div>
</div>
</div>


<div class="location-list">
<div class="row">

<div class="col-md-6">
<div class="clinic-content">
<h4 class="clinic-name"><a href="#">The Family Dentistry Clinic</a></h4>
<p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>


</div>
</div>


<div class="col-md-4">
<div class="clinic-timing">
<div>
<p class="timings-days">
<span> Tue - Fri </span>
</p>
<p class="timings-times">
<span>11:00 AM - 1:00 PM</span>
<span>6:00 PM - 11:00 PM</span>
</p>
</div>
<div>
<p class="timings-days">
<span>Sat - Sun</span>
</p>
<p class="timings-times">
<span>8:00 AM - 10:00 AM</span>
<span>3:00 PM - 7:00 PM</span>
</p>
</div>
</div>
</div>

<div class="col-md-2">
<div class="consult-price">
$350
</div>
</div>
</div>
</div>

</div>


<div role="tabpanel" id="doc_reviews" class="tab-pane fade">

<div class="widget review-listing">
<ul class="comments-list">

<li>
<div class="comment">
<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
<div class="comment-body">
<div class="meta-data">
<span class="comment-author">Richard Wilson</span>
<span class="comment-date">Reviewed 2 Days ago</span>
<div class="review-count rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
<p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the doctor</p>
<p class="comment-content">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation.
Curabitur non nulla sit amet nisl tempus
</p>
<div class="comment-reply">
<a class="comment-btn" href="#">
<i class="fas fa-reply"></i> Reply
</a>
<p class="recommend-btn">
<span>Recommend?</span>
<a href="#" class="like-btn">
<i class="far fa-thumbs-up"></i> Yes
</a>
<a href="#" class="dislike-btn">
<i class="far fa-thumbs-down"></i> No
</a>
</p>
</div>
</div>
</div>

<ul class="comments-reply">
<li>
<div class="comment">
<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
<div class="comment-body">
<div class="meta-data">
<span class="comment-author">Charlene Reed</span>
<span class="comment-date">Reviewed 3 Days ago</span>
<div class="review-count rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
<p class="comment-content">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam.
Curabitur non nulla sit amet nisl tempus
</p>
<div class="comment-reply">
<a class="comment-btn" href="#">
<i class="fas fa-reply"></i> Reply
</a>
<p class="recommend-btn">
<span>Recommend?</span>
<a href="#" class="like-btn">
<i class="far fa-thumbs-up"></i> Yes
</a>
<a href="#" class="dislike-btn">
<i class="far fa-thumbs-down"></i> No
</a>
</p>
</div>
</div>
</div>
</li>
</ul>

</li>


<li>
<div class="comment">
<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
<div class="comment-body">
<div class="meta-data">
<span class="comment-author">Travis Trimble</span>
<span class="comment-date">Reviewed 4 Days ago</span>
<div class="review-count rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
<p class="comment-content">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation.
Curabitur non nulla sit amet nisl tempus
</p>
<div class="comment-reply">
<a class="comment-btn" href="#">
<i class="fas fa-reply"></i> Reply
</a>
<p class="recommend-btn">
<span>Recommend?</span>
<a href="#" class="like-btn">
<i class="far fa-thumbs-up"></i> Yes
</a>
<a href="#" class="dislike-btn">
<i class="far fa-thumbs-down"></i> No
</a>
</p>
</div>
</div>
</div>
</li>

</ul>

<div class="all-feedback text-center">
<a href="#" class="btn btn-primary btn-sm">
Show all feedback <strong>(167)</strong>
</a>
</div>

</div>


<div class="write-review">
<h4>Write a review for <strong>Dr. Darren Elder</strong></h4>

<form>
<div class="form-group">
<label>Review</label>
<div class="star-rating">
<input id="star-5" type="radio" name="rating" value="star-5">
<label for="star-5" title="5 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-4" type="radio" name="rating" value="star-4">
<label for="star-4" title="4 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-3" type="radio" name="rating" value="star-3">
<label for="star-3" title="3 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-2" type="radio" name="rating" value="star-2">
<label for="star-2" title="2 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-1" type="radio" name="rating" value="star-1">
<label for="star-1" title="1 star">
<i class="active fa fa-star"></i>
</label>
</div>
</div>
<div class="form-group">
<label>Title of your review</label>
<input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
</div>
<div class="form-group">
<label>Your review</label>
<textarea id="review_desc" maxlength="100" class="form-control"></textarea>
<div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
</div>
<hr>
<div class="form-group">
<div class="terms-accept">
<div class="custom-checkbox">
<input type="checkbox" id="terms_accept">
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


<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
<div class="row">
<div class="col-md-6 offset-md-3">

<div class="widget business-widget">
<div class="widget-content">
<div class="listing-hours">
<div class="listing-day current">
<div class="day">Today <span>5 Nov 2019</span></div>
<div class="time-items">
<span class="open-status"><span class="badge bg-success-light">Open Now</span></span>
<span class="time">07:00 AM - 09:00 PM</span>
</div>
</div>
<div class="listing-day">
<div class="day">Monday</div>
<div class="time-items">
<span class="time">07:00 AM - 09:00 PM</span>
</div>
</div>
<div class="listing-day">
<div class="day">Tuesday</div>
<div class="time-items">
<span class="time">07:00 AM - 09:00 PM</span>
</div>
</div>
<div class="listing-day">
<div class="day">Wednesday</div>
<div class="time-items">
<span class="time">07:00 AM - 09:00 PM</span>
</div>
</div>
<div class="listing-day">
<div class="day">Thursday</div>
<div class="time-items">
<span class="time">07:00 AM - 09:00 PM</span>
</div>
</div>
<div class="listing-day">
<div class="day">Friday</div>
<div class="time-items">
<span class="time">07:00 AM - 09:00 PM</span>
</div>
</div>
<div class="listing-day">
<div class="day">Saturday</div>
<div class="time-items">
<span class="time">07:00 AM - 09:00 PM</span>
</div>
</div>
<div class="listing-day closed">
<div class="day">Sunday</div>
<div class="time-items">
<span class="time"><span class="badge bg-danger-light">Closed</span></span>
</div>
</div>
</div>
</div>
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