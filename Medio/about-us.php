<?php
include_once 'header1.php'
?>



<section class="about-section">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12">
<h3 class="mb-4">Our Profile</h3>
<p> Medico is the online digital healthcare platform in Pakistan. Medico helps you find and instantly book appointments or online video consultations with the best doctors in Pakistan. Our transparent and intuitive platform helps you choose the right doctors by letting you check up on patient reviews, consultation fees, satisfaction scores, and wait times.</p>
<p class="mb-0">Medico has already served over 15 hundred+ patients across the country and counting! We at Medico strive for a healthier Pakistan, 
    <br>A healthier world, and a healthier tomorrow. With a growing user base and an extensive network of 250+ PMC verified doctors in 100+ specialties, Medico is setting the landscape of Pakistan’s digital healthcare industry.</p>
</div>
<div class="col-md-6">
</div>
</div>
</div>
</section>

<section class="select-category">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-4 col-md-6 category-col d-flex">
<div class="category-subox pb-0 d-flex flex-wrap w-100">
<h4>Visit a Doctor</h4>
<p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
<div class="subox-img">
<div class="subox-circle">
<img src="assets/img/vect-01.png" alt="" width="42">
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 category-col d-flex">
<div class="category-subox pb-0 d-flex flex-wrap w-100">
<h4>Find a Specialist</h4>
<p>We provide the a wide range of medical services, so every person could have the opportunity.</p>
<div class="subox-img">
<div class="subox-circle">
<img src="assets/img/vect-02.png" alt="" width="42">
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 category-col d-flex">
<div class="category-subox pb-0 d-flex flex-wrap w-100">
<h4>Find a Lab</h4>
<p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
<div class="subox-img">
<div class="subox-circle">
<img src="assets/img/vect-03.png" alt="" width="42">
 </div>
</div>
</div>
</div>
</div>
</div>
</section>




<section class="section section-testimonial">
<div class="container">
<div class="section-header text-center mb-4">
<h2>Testimonials</h2>
<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>



<div class="parent-container" style="display: flex;">

<div class="testimonial-item text-center" style="width: 400px;" >
<div class="testimonial-img">
<img src="assets/img/patients/patient1.jpg" class="img-fluid" alt="Speciality">
</div>
<div class="testimonial-content">
<p>Literally the best website to book the appointments online for Doctors. The service is great, helpline guys are very cooperative and understanding. And I don't have to hassle through different hospitals anymore now.</p>
<p class="user-name">- Sara</p>
<p class="user-location mb-0">Hyderabad</p>

</div>
</div>

<div class="testimonial-item text-center" style="width: 400px; margin-left: 40px;" >
<div class="testimonial-img">
<img src="assets/img/patients/patient3.jpg" class="img-fluid" alt="Speciality">
</div>
<div class="testimonial-content">
<p>It is important to take care of the patient, to be followed by the doctor, but it is a time of great pain and suffering. I think this is the most easiest way of booking appointments in Pakistan as it has made the whole process much more efficient.</p>
<p class="user-name">- Ali</p>
<p class="user-location mb-0">Lahore</p>
</div>
</div>


<div class="testimonial-item text-center" style="width: 400px; margin-left: 40px;" >
<div class="testimonial-img">
<img src="assets/img/patients/patient4.jpg" class="img-fluid" alt="">
</div>
<div class="testimonial-content">
<p>Great platform, very efficient and works really well on both phone and web. I think this is the most easiest way of booking appointments in Pakistan as it has made the whole process much more efficient. The suggested doctors are good</p>
<p class="user-name">- Alina</p>
<p class="user-location mb-0">karachi</p>
</div>
</div>

</div>

</div>



<div class="row justify-content-center">
<div class="col-lg-12">

<div class="testimonial-slider slider">




<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from testimony table
$sql = "SELECT pprofile as name, username as img, testimony as comments FROM testimony";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<div class="testimonial-item text-center">';
    echo '<div class="testimonial-img">';
    echo '<img src="admin1/upload/'.$row['img'].'" class="img-fluid" alt="'.$row['name'].'">';
    echo '</div>';
    echo '<div class="testimonial-content">';
    echo '<p>'.$row['comments'].'</p>';
    echo '<p class="user-name">- '.$row['name'].'</p>';
    echo '</div>';
    echo '</div>';
  }
} else {
  echo "0 results";
}

$conn->close();
?>



</div>
</div>
</div>
</section>



<?php
include_once 'footer.php'
?>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="d8b052be17297dd3ba407244-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="d8b052be17297dd3ba407244-text/javascript"></script>

<script src="assets/js/feather.min.js" type="d8b052be17297dd3ba407244-text/javascript"></script>

<script src="assets/js/slick.js" type="d8b052be17297dd3ba407244-text/javascript"></script>

<script src="assets/js/script.js" type="d8b052be17297dd3ba407244-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d8b052be17297dd3ba407244-|49" defer=""></script></body>

</html>