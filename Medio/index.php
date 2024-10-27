
<section class="section section-search-1" style="">

<?php
include_once 'indexheader.php'
?>

<div class="row">
<div class="col-md-6 aos" data-aos="fade-up">
<img src="assets/img/dr-slider.png" class="img-fluid dr-img" alt="">
</div>
<div class="col-md-6 search-doctor aos" data-aos="fade-up">
<div class="search-area">
<h2 class="text-center">Search Doctor, Make an Appointment</h2>
<form action="index3.php" class="search-input" method="POST">
<div class="row">
<div class="col-12 col-md-12">
<div class="form-group">
<label>Location</label>
<select name="location" style="width:350px ;" class="form-select form-control">
    <option value="karachi">Karachi</option>
    <option value="islamabad">Islamabad</option>
    <option value="lahore">Lahore</option>
    <option value="hyderabad">Hyderabad</option>
    <option value="sukkur">Sukkur</option>

</select>
</div>
</div>
<div class="col-12 col-md-12">
<div class="form-group">
<label>Gender</label>
<select name="gender" class="form-select form-control">
<option value="male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="col-12 col-md-12">
<div class="form-group">
<label>Department</label>
<select name="special" style="width:350px ;" class="form-select form-control">
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

// 

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
</div>
</div>
</div>
<div class="submit-section">
<button type="submit" class="btn btn-primary search-btn submit-btn">Search</button>
</div>
</form>
</div>
<div style=" height:;"></div>
</div>
</div>
</div>
</section>



<section class="browse-section">
<div class="container">
<div class="section-header-three text-center aos" data-aos="fade-up">
<h2>Browse by Specialities</h2>
<p class="sub-title">Find a doctor by specialities</p>
</div>
<div class="row">
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-01.png" alt="" />
</div>
<h4>Cardiologist</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-02.png" alt="" />
</div>
<h4>Orthotist </h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-03.png" alt="" />
</div>
<h4>Neurologistc</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-04.png" alt="" />
</div>
<h4>Cardiologist</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-01.png" alt="" />
</div>
<h4>Dentist</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-05.png" alt="" />
</div>
<h4>Heart surgery</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-01.png" alt="" />
</div>
<h4>Urology</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-02.png" alt="" />
</div>
<h4>Neurology</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-03.png" alt="" />
</div>
<h4>Orthopedic</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-01.png" alt="" />
</div>
<h4>Cardiologist</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-01.png" alt="" />
</div>
<h4>Dentist</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
<div class="brower-box">
<div>
<div class="brower-img">
<img src="assets/img/shapes/bro-05.png" alt="" />
</div>
<h4>Cardiac Surgeon</h4>
<p>124 <span>Doctors</span></p>
</div>
</div>
</div>
</div>
<div class="view-all-more text-center aos" data-aos="fade-up">
<a  href="specialized.php" class="btn btn-primary">View More</a>
</div>
</div>
</section>


<section class="doctor-divison">
<div class="d-flex">
<div class="doc-background aos" data-aos="fade-up">
<h3>ARE YOU A DOCTOR?</h3>
<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
<a href="doctor-register.php" class="doc-bok-btn">Register</a>
</div>
<div class="pat-background aos" data-aos="fade-up">
<h3>ARE YOU A PATIENT?</h3>
<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
<a href="login.php" class="doc-bok-btn">Book Now</a>
</div>
</div>
</section>


<section class="book-section">
<div class="container">
<div class="section-header-three text-center aos" data-aos="fade-up">
<h2>Book Our Best Doctor</h2>

</div>
<div class="row">
<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
<div class="book-best-doctors">
<div class="book-header">
<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-01.jpg" alt="" class="img-fluid"></a>
<div class="img-overlay">
<i class="fas fa-star"></i>
</div>
</div>
<div class="doctors-body">
<div class="inner-section">

<div class="rating text-end">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-ratings">3.5</span>
</div>
<a href="doctor-profile.html"><h4>Dr. Zara</h4></a>
<p>MBBS, Dermotologist</p>
</div>
<div class="row  row-sm loc-details">
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/map-plus.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Location</span>
<span class="data-info">Hyderabad</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/alarm.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Available on</span>
<span class="data-info">Mon-Fri, 3 May</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/consult.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Consulting</span>
<span class="data-info">500+ Patients</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/exper.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">EXPERIENCE</span>
<span class="data-info">5+ Years</span>
</a>
</div>
</div>
</div>
<div class="row row-sm align-items-center p-3">

<div class="col-6">
<a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
<div class="book-best-doctors">
<div class="book-header">
<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-05.jpg" alt="" class="img-fluid"></a>
<div class="img-overlay">
<i class="fas fa-star"></i>
</div>
</div>
<div class="doctors-body">
<div class="inner-section">

<div class="rating text-end">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-ratings">4.5</span>
</div>
<a href="doctor-profile.html"><h4>Dr.Akram </h4></a>
<p>MBBS, General Physician, Eye Specialist</p>
</div>
<div class="row row-sm loc-details">
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/map-plus.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Location</span>
<span class="data-info">Lahore</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/alarm.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Available on</span>
<span class="data-info">Mon-Fri, 3 May</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/consult.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Consulting</span>
<span class="data-info">500+ Patients</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/exper.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">EXPERIENCE</span>
<span class="data-info">20+ Years</span>
</a>
</div>
</div>
</div>
<div class="row row-sm align-items-center p-3">

<div class="col-6">
<a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
<div class="book-best-doctors">
<div class="book-header">
<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid"></a>
<div class="img-overlay">
<i class="fas fa-star"></i>
</div>
</div>
<div class="doctors-body">
<div class="inner-section">

<div class="rating text-end">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-ratings">3.5</span>
</div>
<a href="doctor-profile.html"><h4>Dr. Alina</h4></a>
<p>MBBS, Gastroenterologist</p>
</div>
<div class="row row-sm loc-details">
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/map-plus.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Location</span>
<span class="data-info">Islamabad</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/alarm.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Available on</span>
<span class="data-info">Fri, 22 March</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/consult.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Consulting</span>
<span class="data-info">500+ Patients</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/exper.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">EXPERIENCE</span>
<span class="data-info">25+ Years</span>
</a>
</div>
</div>
</div>
<div class="row row-sm align-items-center p-3">

<div class="col-6">
<a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
<div class="book-best-doctors">
<div class="book-header">
<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-04.jpg" alt="" class="img-fluid"></a>
<div class="img-overlay">
<i class="fas fa-star"></i>
</div>
</div>
<div class="doctors-body">
<div class="inner-section">

<div class="rating text-end">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-ratings">3.5</span>
</div>
<a href="doctor-profile.html"><h4>Dr. Isra</h4></a>
<p>MBBS, Urologist</p>
</div>
<div class="row row-sm loc-details">
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/map-plus.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Location</span>
<span class="data-info">Sukkar</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/alarm.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Available on</span>
<span class="data-info">Fri, 22 March</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/consult.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">Consulting</span>
<span class="data-info">500+ Patients</span>
</a>
</div>
</div>
<div class="col-6">
<div class="d-flex align-items-center">
<a href="javascript:void(0);">
<img src="assets/img/shapes/exper.png" alt="" />
</a>
<a href="javascript:void(0);">
<span class="available-info">EXPERIENCE</span>
<span class="data-info">25+ Years</span>
</a>
</div>
</div>
</div>
<div class="row row-sm align-items-center p-3">

<div class="col-6">
<a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="view-all-more text-center aos" data-aos="fade-up">
<a href="doctor-profile.html" class="btn btn-primary">View More</a>
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