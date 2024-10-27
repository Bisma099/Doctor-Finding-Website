<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<?php
 include_once'header.php';


  ?>

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

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
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Schedule Timings</h4>
<div class="profile-box">
<div class="row">
<div class="col-sm-6 col-12 avail-time">
<div class="mb-3">
<div class="schedule-calendar-col justify-content-start">

</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<h3 class="h3 text-center book-btn2 mt-3 px-5 py-1 mx-3 rounded">1<sup>st</sup> Session </h3>
<div class="text-center mt-3">

<label>you can only select 4 times during trial period and post 1 once per day</label>
      <form action="includes/AddAPT.inc.php" method="POST" >
        <span>

<input name="fees" type="text" class="" value="" placeholder="fees" required="">

<div class="token-slot mt-2">
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input name="time[]" type="checkbox" class="form-check-input" value="02:40 PM">
 <span class="visit-rsn" data-bs-toggle="tooltip" title="02:40 PM">02:40 PM</span>
</label>
</div>
<div class='form-check-inline visits me-0'>
<label class='visit-btns'>
<input type='checkbox' class='form-check-input' data-session='1' name='time[]' value='03:00 PM'>
<span class='visit-rsn' data-bs-toggle='tooltip' title='03:00 PM'>03:00 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-session="1" name="time[]" value="03:20 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="03:20 PM">03:20 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input"  data-session="1" name="time[]" value="03:40 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="03:40 PM">03:40 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-session="1" name="time[]" value="04:00 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="04:00 PM">04:00 PM</span>
</label>
</div>
<div class='form-check-inline visits me-0'>
<label class='visit-btns'>
<input type='checkbox' class='form-check-input' data-date='2021-05-21' data-timezone='Asia/Calcutta' data-start-time='16:20:00' data-end-time='16:40:00' data-session='1' name="time[]" value='04:20 PM'>
<span class='visit-rsn' data-bs-toggle='tooltip' title='04:20 PM'>04:20 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="16:40:00" data-end-time="17:00:00" data-session="1" name="time[]" value="04:40 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="04:40 PM">04:40 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="17:00:00" data-end-time="17:20:00" data-session="1" name="time[]" value="05:00 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="05:00 PM">05:00 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="17:20:00" data-end-time="17:40:00" data-session="1" name="time[]" value="05:20 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="05:20 PM">05:20 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="17:40:00" data-end-time="18:00:00" data-session="1" name="time[]" value="05:40 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="05:40 PM">05:40 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="18:00:00" data-end-time="18:20:00" data-session="1" name="time[]" value="06:00 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="06:00 PM">06:00 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="18:20:00" data-end-time="18:40:00" data-session="1" name="time[]" value="06:20 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="06:20 PM">06:20 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="18:40:00" data-end-time="19:00:00" data-session="1" name="time[]" value="06:40 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="06:40 PM">06:40 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="19:00:00" data-end-time="19:20:00" data-session="1" name="time[]" value="07:00 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="07:00 PM">07:00 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="19:20:00" data-end-time="19:40:00" data-session="1" name="time[]" value="07:20 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="07:20 PM">07:20 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="19:40:00" data-end-time="20:00:00" data-session="1" name="time[]" value="07:40 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="07:40 PM">07:40 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="20:00:00" data-end-time="20:20:00" data-session="1" name="time[]" value="08:00 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="08:00 PM">08:00 PM</span>
</label>
 </div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="20:20:00" data-end-time="20:40:00" data-session="1" name="time[]" value="08:20 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="08:20 PM">08:20 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="20:40:00" data-end-time="21:00:00" data-session="1" name="time[]" value="08:40 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="08:40 PM">08:40 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="21:00:00" data-end-time="21:20:00" data-session="1" name="time[]" value="09:00 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="09:00 PM">09:00 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="21:20:00" data-end-time="21:40:00" data-session="1" name="time[]" value="09:20 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="09:20 PM">09:20 PM</span>
</label>
</div>
<div class="form-check-inline visits me-0">
<label class="visit-btns">
<input type="checkbox" class="form-check-input" data-date="2021-05-21" data-timezone="Asia/Calcutta" data-start-time="21:40:00" data-end-time="22:00:00" data-session="1" name="time[]" value="09:40 PM">
<span class="visit-rsn" data-bs-toggle="tooltip" title="09:40 PM">09:40 PM</span>
</label>
</div>
</div>
</div>

</div>

</div>
</div>
</div>

</div>


<div class="submit-section proceed-btn text-end">
<button name="submit"  class="btn btn-primary submit-btn">Book</button>
</form>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="c6de10ed1e64813c24af34eb-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="c6de10ed1e64813c24af34eb-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="c6de10ed1e64813c24af34eb-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="c6de10ed1e64813c24af34eb-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="c6de10ed1e64813c24af34eb-text/javascript"></script>

<script src="assets/js/feather.min.js" type="c6de10ed1e64813c24af34eb-text/javascript"></script>

<script src="assets/js/script.js" type="c6de10ed1e64813c24af34eb-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c6de10ed1e64813c24af34eb-|49" defer=""></script></body>

</html>