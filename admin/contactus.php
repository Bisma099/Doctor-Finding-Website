<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>medico</title>

<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body><?php include_once'header1.php'

?>

<div class="main-wrapper">



<?php include_once'header1.php'

?>
 <?php
include_once 'includes/dbh.inc.php'
?>

<div style="width: 70%;" class="page-wrapper">
<div class="content container-fluid">




<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col">
<h5 class="card-title">requests</h5>
</div>

</div>
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="datatable table table-borderless hover-table" id="data-table">
<thead class="thead-light">
<tr>
<th>ID</th>
<th>name</th>
<th>subject</th>
<th>comment</th>

</tr>
</thead>
<tbody>
     <?php



$sql="SELECT * FROM contactus ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);

if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
         echo("<tr>
<td>#".$row['id']."</td>
<td>
<h2 class='table-avatar'>
<a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'></a>
<a href='#' data-bs-target='#patientlist' data-bs-toggle='modal'><span class='user-name'>".$row['name']."</span> <span class='text-muted'>".$row['email']."</span></a>
</h2>
</td>
<td><span class='user-name'>".$row['subject']." </span><span class='d-block'></span></td>
<td>".$row['comment']."</td>

</tr>");
          echo" ";
         //The search 2;
}


}
else{
    echo("no doctor available");
          
}



 




                              ?>


</tbody>
</table>
</div>
</div>
</div>
<div id="tablepagination" class="dataTables_wrapper"></div>
</div>
</div>

</div>
</div>


<div class="modal fade contentmodal" id="patientlist" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header justify-content-center border-bottom-0">
<h4 class="modal-title">Patient Details</h4>
<button type="button" class="close-btn pos-top" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>

</div>
</div>
</div>


<div class="modal fade contentmodal" id="editModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header">
<h3 class="mb-0">Edit Patient</h3>
<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>
<div class="modal-body">
<form action="">
<div class="add-wrap">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Dr. Rayan miller">
<label class="focus-label">Doctor Name <span class="text-danger">*</span></label>
</div>
<label class="mb-1">Patient Image</label>
<div class="change-photo-btn">
<div><i class="feather-upload"></i>
<p>Upload File</p></div>
<input type="file" class="upload">
<span class="file-upload-text"></span>
</div>
<p class="file-name text-success">Successfully Product image.jpg uploaded <a href="#" class="text-danger"><i class="feather-x"></i></a></p>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="$330.00">
<label class="focus-label">Consultation Fees <span class="text-danger">*</span></label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Newyork, USA">
<label class="focus-label">Location <span class="text-danger">*</span></label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="+1 5454 2154 4545">
<label class="focus-label">Phone <span class="text-danger">*</span></label>
</div>
<div class="submit-section">
<button type="submit" class="btn btn-primary btn-save">Save Changes</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content doctor-profile">
<div class="modal-header border-bottom-0 justify-content-end">
<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
</div>
<div class="modal-body">
<div class="delete-wrap text-center">
<form action="">
<div class="del-icon"><i class="feather-x-circle"></i></div>
<h2>Sure you Want to delete</h2>
<p>“Patient”</p>
<div class="submit-section">
<button type="submit" class="btn btn-success me-2">Yes</button>
<a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
</div>
</form>
</div>
 </div>
</div>
</div>
</div>

</div>
<?php
include_once 'footer.php'
?>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/js/moment.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>
<script src="assets/plugins/datatables/datatables.min.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>

<script src="assets/js/script.js" type="087b1bbaf3595f9996d8a10e-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="087b1bbaf3595f9996d8a10e-|49" defer=""></script></body>


</html>