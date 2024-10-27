<?php
 include_once'header.php';
 $statused=$_SESSION["status"];
 if (isset($_GET["title"])) {
  if ($_GET['title']=="inactive") {
     session_unset();
   session_destroy();
    
     header("location:login.php?title=".$statused." ");
}}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Medicos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link href="assets/img/favicon.jpg.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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

<div class="content">
<div class="container-fluid">
<div class="row">
<?php
 include_once'psidebar.php';


  ?>
<div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
<div class="card">
<div class="card-body pt-0">
<div class="user-tabs">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
<li class="nav-item">
<a class="nav-link active" href="#pat_appointments" data-bs-toggle="tab">Appointments</a>
</li>


</ul>
</div>
<div class="tab-content">

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
<th>View Invoice</th>


<th></th>
</tr>

<?php



$search=mysqli_real_escape_string($conn,$_SESSION['id']);

$sql="SELECT * FROM bookedapt WHERE pid LIKE '$search%' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);
//".$row['dated']."
if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>
<h2 class='table-avatar'>
<a href='patient-profile.html' class='avatar avatar-m me-2'><img class='avatar-img' src='admin1/uploads/".$row['dprofile']."' alt='User Image'></a>
<a href='patient-profile.php?title=".$row['pid']."'>".$row['drname']." <span>".$row['drid']."</span></a>

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

<td>
<div class='consult-type d-flex flex-column'>
<a  href='invoice-view.php?title=".$row['id']."' class='btn btn-sm bg-info-light' data-bs-toggle='modal' data-bs-target='#appt_details'>
<i class='far fa-eye'></i> View
</a>
</div>
</td>

<td class='text-center'><a href='reschedule.php?title=".$row['drid']." & error=".$row['id']."'><i class='fas fa-chevron-right'></i></a></td>
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


<div class="tab-pane fade" id="pres">
<div class="text-end">
</div>
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
<a href="doctor-profile.html">Dr. Ruby  <span>Dental</span></a>
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
<td>13 Nov 2022</td>
<td>Prescription 2</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. sara <span>Dental</span></a>
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
<a href="edit-prescription.html" class="btn btn-sm bg-success-light">
<i class="fas fa-edit"></i> Edit
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
<i class="far fa-trash-alt"></i> Delete
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
<td>9 Nov 2022</td>
<td>Prescription 6</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Ali<span>Orthopaedics</span></a>
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
<a href="doctor-profile.html">Dr. Aslam <span>Dermatology</span></a>
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
<td>5 Nov 2023</td>
<td>Prescription 10</td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Zara<span>Dental</span></a>
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


<div class="tab-pane fade" id="medical">
<div class="text-end">
<a href="#" class="add-new-btn" data-bs-toggle="modal" data-bs-target="#add_medical_records">Add Medical Records</a>
</div>
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
<td><a href="javascript:void(0);">#MR-0009</a></td>
<td>13 Nov 2019</td>
<td>Teeth Cleaning</td>
<td><a href="#">dental-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Sara <span>Dental</span></a>
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
<a href="edit-prescription.html" class="btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#add_medical_records">
<i class="fas fa-edit"></i> Edit
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
<i class="far fa-trash-alt"></i> Delete
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
<td><a href="javascript:void(0);">#MR-0007</a></td>
<td>11 Nov 2022</td>
<td>General Test</td>
<td><a href="#">general-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Sofia  <span>Urology</span></a>
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
<td><a href="javascript:void(0);">#MR-0006</a></td>
<td>10 Nov 2019</td>
<td>Eye Test</td>
<td><a href="#">eye-test.pdf</a></td>
<td>
<h2 class="table-avatar">
<a href="doctor-profile.html" class="avatar avatar-sm me-2">
<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
</a>
<a href="doctor-profile.html">Dr. Marvin  <span>Ophthalmology</span></a>
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
<td><a href="javascript:void(0);">#MR-0003</a></td>
<td>7 Nov 2022</td>
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
<td><a href="javascript:void(0);">#MR-0002</a></td>
<td>6 Nov 2022</td>
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


<div class="tab-pane" id="billing">
<div class="text-end">
<a class="add-new-btn" href="add-billing.html">Add Billing</a>
</div>
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
<a href="doctor-profile.html">Ruby  <span>Dental</span></a>
</h2>
</td>
<td>$450</td>
<td>14 Nov 2019</td>
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
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
<a href="edit-billing.html" class="btn btn-sm bg-success-light">
<i class="fas fa-edit"></i> Edit
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
<i class="far fa-trash-alt"></i> Delete
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
<a href="doctor-profile.html">Dr. Aliza <span>Cardiology</span></a>
</h2>
</td>
<td>$150</td>
<td>12 Nov 2019</td>
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
<td>rs.600</td>
<td>10 Nov 2019</td>
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
<td>rs.200</td>
<td>9 Nov 2022</td>
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


<div class="modal fade custom-modal" id="add_medical_records">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Medical Records</h3>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form>
<div class="modal-body">
<div class="form-group">
<label>Date</label>
<input type="text" class="form-control datetimepicker" value="31-10-2019">
</div>
<div class="form-group">
<label>Description ( Optional )</label>
<textarea class="form-control"></textarea>
</div>
<div class="form-group">
<label>Upload File</label>
<input type="file" class="form-control">
</div>
<div class="submit-section text-center">
<button type="submit" class="btn btn-primary submit-btn">Submit</button>
<button type="button" class="btn btn-secondary submit-btn" data-bs-dismiss="modal">Cancel</button>
</div>
</div>
</form>
</div>
</div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>

<script src="assets/js/moment.min.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>

<script src="assets/js/feather.min.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>

<script src="assets/js/script.js" type="47edf6b1dd66a8cabbf413f3-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="47edf6b1dd66a8cabbf413f3-|49" defer=""></script></body>

</html>