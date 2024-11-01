<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>medico</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<?php
 include_once'header.php';


  ?>
<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/apex/apexcharts.css">

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




<div class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
<?php
 include_once'drsidebar.php';


  ?>
</div>
<?php

$title=mysqli_real_escape_string($conn, $_GET['title']);




$search=mysqli_real_escape_string($conn,$_SESSION['id']);

$sql="SELECT * FROM patient WHERE id LIKE '$search%' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         $_SESSION['pname']=$row['username'];
         $_SESSION['bgroup']=$row['bloodgroup']; 
         $_SESSION['pprofile']=$row['profile'];
          $_SESSION['dcontact']=$row['numbers']; 
         $_SESSION['education']=$row['college'];
          $_SESSION['ddegree']=$row['degree'];
           $_SESSION['daddress']=$row['address'];
                      $_SESSION['yearofc']=$row['yearofc'];

         //The search 2;
}


}
else{
    echo("no doctor available");
          
}



 




                         

  ?>

<div class="col-md-7 col-lg-8 col-xl-9">
<div class="row">
<div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
<div class="card">
<div class="card-body text-center">
<div class="mb-3">
<img src="assets/img/specialities/pt-dashboard-01.png" alt="" width="55">
</div>
<h5>Heart Rate</h5>
<h6>12 <sub>bpm</sub></h6>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
<div class="card">
<div class="card-body text-center">
<div class="mb-3">
<img src="assets/img/specialities/pt-dashboard-02.png" alt="" width="55">
</div>
<h5>Body Temperature</h5>
<h6>18 <sub>C</sub></h6>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
<div class="card">
<div class="card-body text-center">
<div class="mb-3">
<img src="assets/img/specialities/pt-dashboard-03.png" alt="" width="55">
</div>
<h5>Glucose Level</h5>
<h6>70 - 90</h6>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
<div class="card">
<div class="card-body text-center">
<div class="mb-3">
<img src="assets/img/specialities/pt-dashboard-04.png" alt="" width="55">
</div>
<h5>Blood Pressure</h5>
<h6>202/90 <sub>mg/dl</sub></h6>
</div>
</div>
</div>
</div>
<div class="row patient-graph-col">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Graph Status</h4>
</div>
<div class="card-body pt-2 pb-2 mt-1 mb-1">
<div class="row">
<div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
<a href="#" class="graph-box" data-bs-toggle="modal" data-bs-target="#graph1">
<div>
<h4>BMI Status</h4>
</div>
<div class="graph-img">
<img src="assets/img/shapes/graph-01.png" alt="">
</div>
<div class="graph-status-result mt-3">
<span class="graph-update-date">Last Update 6d</span>
</div>
</a>
</div>
<div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
<a href="#" class="graph-box pink-graph" data-bs-toggle="modal" data-bs-target="#graph2">
<div>
<h4>Heart Rate Status</h4>
</div>
<div class="graph-img">
<img src="assets/img/shapes/graph-02.png" alt="">
</div>
<div class="graph-status-result mt-3">
<span class="graph-update-date">Last Update 2d</span>
</div>
</a>
</div>
<div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
<a href="#" class="graph-box sky-blue-graph" data-bs-toggle="modal" data-bs-target="#graph3">
<div>
<h4>FBC Status</h4>
</div>
<div class="graph-img">
<img src="assets/img/shapes/graph-03.png" alt="">
</div>
<div class="graph-status-result mt-3">
<span class="graph-update-date">Last Update 5d</span>
</div>
</a>
</div>
 <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
<a href="#" class="graph-box orange-graph" data-bs-toggle="modal" data-bs-target="#graph4">
<div>
<h4>Weight Status</h4>
</div>
<div class="graph-img">
<img src="assets/img/shapes/graph-04.png" alt="">
</div>
<div class="graph-status-result mt-3">
<span class="graph-update-date">Last Update 3d</span>
</div>
</a>
</div>
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
<a class="nav-link active" href="#pat_appointments" data-bs-toggle="tab">Appointments</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#pat_prescriptions" data-bs-toggle="tab">Prescriptions</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#pat_medical_records" data-bs-toggle="tab"><span class="med-records">Medical Records</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#pat_billing" data-bs-toggle="tab">Billing</a>
</li>
</ul>
</nav>


<div class="tab-content pt-0">

<div id="pat_appointments" class="tab-pane fade show active">
<div class="card card-table mb-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Doctor</th>
<th>Appt Date</th>
<th>Booking Date</th>
<th>Amount</th>
<th>Follow Up</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
</h2>
</td>
<td>14 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
<td>12 Nov 2019</td>
<td>$160</td>
<td>16 Nov 2019</td>
<td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
</h2>
</td>
<td>12 Nov 2019 <span class="d-block text-info">8.00 PM</span></td>
<td>12 Nov 2019</td>
<td>$250</td>
<td>14 Nov 2019</td>
<td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
</h2>
</td>
<td>11 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
<td>10 Nov 2019</td>
<td>$400</td>
<td>13 Nov 2019</td>
<td><span class="badge rounded-pill bg-danger-light">Cancelled</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
</h2>
</td>
<td>10 Nov 2019 <span class="d-block text-info">3.00 PM</span></td>
<td>10 Nov 2019</td>
<td>$350</td>
<td>12 Nov 2019</td>
<td><span class="badge rounded-pill bg-warning-light">Pending</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
</h2>
</td>
<td>9 Nov 2019 <span class="d-block text-info">7.00 PM</span></td>
<td>8 Nov 2019</td>
<td>$75</td>
<td>11 Nov 2019</td>
<td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
</h2>
</td>
<td>8 Nov 2019 <span class="d-block text-info">9.00 AM</span></td>
<td>6 Nov 2019</td>
<td>$175</td>
<td>10 Nov 2019</td>
<td><span class="badge rounded-pill bg-danger-light">Cancelled</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
</h2>
</td>
<td>8 Nov 2019 <span class="d-block text-info">6.00 PM</span></td>
<td>6 Nov 2019</td>
<td>$450</td>
<td>10 Nov 2019</td>
<td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
</h2>
</td>
<td>7 Nov 2019 <span class="d-block text-info">9.00 PM</span></td>
<td>7 Nov 2019</td>
<td>$275</td>
<td>9 Nov 2019</td>
<td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
 <h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
</h2>
</td>
<td>6 Nov 2019 <span class="d-block text-info">8.00 PM</span></td>
<td>4 Nov 2019</td>
<td>$600</td>
<td>8 Nov 2019</td>
<td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
</h2>
</td>
<td>5 Nov 2019 <span class="d-block text-info">5.00 PM</span></td>
<td>1 Nov 2019</td>
<td>$100</td>
<td>7 Nov 2019</td>
<td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div class="tab-pane fade" id="pat_prescriptions">
<div class="card card-table mb-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Date </th>
<th>Name</th>
<th>Created by </th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>14 Nov 2019</td>
<td>Prescription 1</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>13 Nov 2019</td>
<td>Prescription 2</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>12 Nov 2019</td>
<td>Prescription 3</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>11 Nov 2019</td>
<td>Prescription 4</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>10 Nov 2019</td>
<td>Prescription 5</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Marvin Campbell <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>9 Nov 2019</td>
<td>Prescription 6</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>8 Nov 2019</td>
<td>Prescription 7</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>7 Nov 2019</td>
<td>Prescription 8</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>6 Nov 2019</td>
<td>Prescription 9</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
 <i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>5 Nov 2019</td>
<td>Prescription 10</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div id="pat_medical_records" class="tab-pane fade">
<div class="card card-table mb-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>ID</th>
<th>Date </th>
<th>Description</th>
<th>Attachment</th>
<th>Created</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="javascript:void(0);">#MR-0010</a></td>
<td>14 Nov 2019</td>
<td>Dental Filling</td>
<td><a href="#">dental-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0009</a></td>
<td>13 Nov 2019</td>
<td>Teeth Cleaning</td>
<td><a href="#">dental-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0008</a></td>
<td>12 Nov 2019</td>
<td>General Checkup</td>
<td><a href="#">cardio-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0007</a></td>
<td>11 Nov 2019</td>
<td>General Test</td>
<td><a href="#">general-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0006</a></td>
<td>10 Nov 2019</td>
<td>Eye Test</td>
<td><a href="#">eye-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0005</a></td>
<td>9 Nov 2019</td>
<td>Leg Pain</td>
<td><a href="#">ortho-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0004</a></td>
<td>8 Nov 2019</td>
<td>Head pain</td>
<td><a href="#">neuro-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0003</a></td>
<td>7 Nov 2019</td>
<td>Skin Alergy</td>
<td><a href="#">alergy-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0002</a></td>
<td>6 Nov 2019</td>
<td>Dental Removing</td>
<td><a href="#">dental-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td><a href="javascript:void(0);">#MR-0001</a></td>
<td>5 Nov 2019</td>
<td>Dental Filling</td>
<td><a href="#">dental-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
</h2>
</td>
<td class="text-end">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div id="pat_billing" class="tab-pane fade">
<div class="card card-table mb-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Invoice No</th>
<th>Doctor</th>
<th>Amount</th>
<th>Paid On</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a href="invoice-view.html">#INV-0010</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Ruby Perrin <span>Dental</span></a>
</h2>
</td>
<td>$450</td>
<td>14 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0009</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
</h2>
</td>
<td>$300</td>
<td>13 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0008</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
</h2>
</td>
<td>$150</td>
<td>12 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0007</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
</h2>
</td>
<td>$50</td>
<td>11 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0006</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
</h2>
</td>
<td>$600</td>
<td>10 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0005</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
 </h2>
</td>
<td>$200</td>
<td>9 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0004</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
</h2>
</td>
<td>$100</td>
<td>8 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0003</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
</h2>
</td>
<td>$250</td>
<td>7 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0002</a>
</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
</h2>
</td>
<td>$175</td>
<td>6 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
<tr>
<td>
<a href="invoice-view.html">#INV-0001</a>
 </td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Olga Barlow <span>#0010</span></a>
</h2>
</td>
<td>$550</td>
<td>5 Nov 2019</td>
<td class="text-end">
<div class="table-action">
<a href="invoice-view.html" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
</div>
</td>
</tr>
</tbody>
</table>
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


<div class="modal fade custom-modal show" id="graph1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">BMI Status</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div id="bmi-status"></div>
</div>
</div>
</div>
</div>


<div class="modal fade custom-modal show" id="graph2">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Heart Rate Status</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div id="heartrate-status"></div>
</div>
</div>
</div>
</div>


<div class="modal fade custom-modal show" id="graph3">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">FBC Status</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div id="fbc-status"></div>
</div>
</div>
</div>
</div>


<div class="modal fade custom-modal show" id="graph4">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Weight Status</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div id="weight-status"></div>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="d204bdc441cda8af63cd5d10-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="d204bdc441cda8af63cd5d10-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="d204bdc441cda8af63cd5d10-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="d204bdc441cda8af63cd5d10-text/javascript"></script>

<script src="assets/js/feather.min.js" type="d204bdc441cda8af63cd5d10-text/javascript"></script>

<script src="assets/plugins/apex/apexcharts.min.js" type="d204bdc441cda8af63cd5d10-text/javascript"></script>

<script src="assets/js/script.js" type="d204bdc441cda8af63cd5d10-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d204bdc441cda8af63cd5d10-|49" defer=""></script></body>
</html>