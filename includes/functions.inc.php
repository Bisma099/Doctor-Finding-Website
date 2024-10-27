<?php
//Signup functions start please dont delete anyone of them
function empty_Input_Signup($name,$username,$number,$pwd,$pwdrepeat){

	$result;
	if (empty($name)||empty($username)||empty($number)||empty($pwd)||empty($pwdrepeat)) {
		$result=true;
	}
	else{
	$result=false;}
	return $result;

}
function invalidusername($username){

	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
		$result=true;
	}
	else{
	$result=false;}
return $result;
}
function pwdMatch($pwd,$pwdrepeat){

	$result;
	if ($pwd!==$pwdrepeat) {
		$result=true;
	}
	else{
	$result=false;}
return $result;
}
//doctor database checking (for patients,admins,doctor)
function usernameExist($conn,$username,$number){

	$sql="SELECT * FROM patient where email=? OR numbers=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("location:../signup.php?error=stmtfailed");
   	exit();
	}
	mysqli_stmt_bind_param($stmt,"ss",$username,$number);
	mysqli_stmt_execute($stmt);
$resultData=mysqli_stmt_get_result($stmt);

if ($row=mysqli_fetch_assoc($resultData)) {

	return $row;
}
else{

	$result=false;
	return $result;
}

mysqli_stmt_close($stmt);

}
 //upload dr. username check code
function drusernameExist($conn,$username){

	$sql="SELECT * FROM doctor where email=? ;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("location:../signup.php?error=stmtfailed");
   	exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$username);
	mysqli_stmt_execute($stmt);
$resultData=mysqli_stmt_get_result($stmt);

if ($row=mysqli_fetch_assoc($resultData)) {
	return $row;
}
else{

	$result=false;
	return $result;
}

mysqli_stmt_close($stmt);

}
 //admin exist checks
function AdminExist($conn,$username){

	$sql="SELECT * FROM admin where email=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("location:../signup.php?error=stmtfailed");
   	exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$username);
	mysqli_stmt_execute($stmt);
$resultData=mysqli_stmt_get_result($stmt);

if ($row=mysqli_fetch_assoc($resultData)) {
	return $row;
}
else{

	$result=false;
	return $result;
}

mysqli_stmt_close($stmt);

}
//patient signup
function createUser($conn,$name,$username,$number,$pwd,$dob,$gender){

	$sql="INSERT INTO patient(username,email,numbers,password,dob,gender) VALUES(?,?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../signup.php?error=stmtfailed");
   	exit();
	}
	$hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt,"ssssss",$name,$username,$number,$hashedpwd,$dob,$gender);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location:../register.php?error=none");
   	exit();
}
//doctor signup
function createdr($conn,$name,$username,$number,$pwd,$dob,$gender){
$regis="registered";

	$sql="INSERT INTO doctor(username,email,numbers,password,gender,DOB,status) VALUES(?,?,?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../signup.php?error=stmtfailed");
   	exit();
	}
	$hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt,"sssssss",$name,$username,$number,$hashedpwd,$gender,$dob,$regis);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location:../register.php?error=none");
   	exit();
}
//Signup Section End
//empty input check

function empty_Input_login($username,$pwd){

	$result;
	if (empty($username)||empty($pwd)) {
		$result=true;
	}
	else{
	$result=false;}
	return $result;

}
//deposit
function deposit($conn,$status,$date,$trid,$fileNameNew,$apttime){
session_start();
$drid=$_SESSION['drid'];
 $username=$_SESSION['username'];
 $id=$_SESSION['id'];
   $amount=$_SESSION['drfee'];
	$sql="INSERT INTO trds(trid,username,userid,status,amount,dated,ss,drid) VALUES(?,?,?,?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../available-timings.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"ssssssss",$trid,$username,$id,$status,$amount,$date,$fileNameNew,$drid);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 aptbook($conn,$apttime);
   	exit();

 }
 //dr admin signup
function creat1edr($conn,$username,$pwd){

	$sql="INSERT INTO doctor(username,password) VALUES(?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../signup.php?error=stmtfailed");
   	exit();
	}
	$hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt,"ss",$username,$hashedpwd);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location:../doctor-list.php?error=none");
   	exit();
}
  //withdraw
function withdraw($conn,$status,$date,$amount,$trid){
session_start();
 $username=$_SESSION['username'];
 $id=$_SESSION['id'];
 
	$sql="INSERT INTO trc(trid,username,userid,status,amount,dated) VALUES(?,?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../available-timings.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"ssssss",$trid,$username,$id,$status,$amount,$date);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
     echo "<script>alert('withdrawal request submitted successfuly');</script>";

    echo "<script>setTimeout(function(){ window.location.href = '../tcs.php?error=scored'; }, 500);</script>";
      exit();

 }

//patient login
function loginUser($conn,$username,$pwd){

	
	$uidExist=usernameExist($conn,$username,$username);


	if ($uidExist===false) {

	require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   loginAdmin($conn,$username,$pwd);

		  header("location:../login.php?error==userdontexist");
      exit();
	}
	$pwdhashed=$uidExist["password"];
	$pwdcheck=password_verify($pwd,$pwdhashed);
	if ($pwdcheck==false) {
	 header("location:../login.php?error==wronglogin");
	}
	if ($pwdcheck==true) {
	 session_start();
	 $_SESSION["id"]=$uidExist["id"];
	 $_SESSION["username"]=$uidExist["username"];
	  $_SESSION["numbers"]=$uidExist["numbers"];
	  $_SESSION["email"]=$uidExist["email"];
	    $_SESSION["id"]=$uidExist["id"];
	      $_SESSION["Address"]=$uidExist["address"];
	      $_SESSION["profile"]=$uidExist["profile"];
$_SESSION["dob"]=$uidExist["dob"];
$_SESSION["gendere"]=$uidExist["gender"];
	$_SESSION["bal"]=$uidExist["bal"];
	$_SESSION["status"]=$uidExist["status"];
$statused=$_SESSION["status"];
	  include'location:../header.php';
	 header("location:../patient-profile.php?title=".$statused." ");
	 exit();
	}
	
}
 //admin login 
function loginAdmin($conn,$username,$pwd){
	$uidExist=AdminExist($conn,$username);
	if ($uidExist===false) {

		  header("location:../login.php?error=userdontexist");
      exit();
	}
	$pwdhashed=$uidExist["password"];
	$pwdcheck=password_verify($pwd,$pwdhashed);
	
	 session_start();
	
	 
	
	  $_SESSION["email"]=$uidExist["email"];
	  include'location:../header.php';
	 header("location:../admin1/index.php");
	 exit();
	
	
}
//doctor login
function logindr($conn,$username,$pwd){
	$uidExist=drusernameExist($conn,$username);
	if ($uidExist===false) {

		  header("location:../login.php?error==userdontexist");
      exit();
	}
	$pwdhashed=$uidExist["password"];
	$pwdcheck=password_verify($pwd,$pwdhashed);
	if ($pwdcheck==false) {
	 header("location:../logindr.php?error=wronglogin");
	}
	if ($pwdcheck==true) {
	 session_start();
	
	 
	$_SESSION["id"]=$uidExist["id"];
	 $_SESSION["username"]=$uidExist["username"];
	  $_SESSION["numbers"]=$uidExist["numbers"];
	  $_SESSION["email"]=$uidExist["email"];
	    $_SESSION["id"]=$uidExist["id"];
	      $_SESSION["Address"]=$uidExist["address"];
	      	      $_SESSION["DOB"]=$uidExist["DOB"];
	      	       $_SESSION["gender"]=$uidExist["gender"];
	      	      $_SESSION["specialization"]=$uidExist["specialization"];
	      	        	      $_SESSION["service"]=$uidExist["service"];
	      	        	        $_SESSION["degree"]=$uidExist["degree"];
	      	        	        $_SESSION["profile"]=$uidExist["profile"];
	      	        	         $_SESSION["status"]=$uidExist["status"];
	      	        	         $_SESSION["bal"]=$uidExist["bal"];

$statused=$_SESSION["status"];

	  include'location:../header.php';
	 header("location:../doctor-dashboard.php?title=".$statused." ");
	 exit();
	}
	
}

function testimony($conn,$testimony){
session_start();
  $patient=$_SESSION['username'];
   $id=$_SESSION['id'];
$profile=$_SESSION['profile'];

	$sql="INSERT INTO testimony(testimony,pprofile,username,id) VALUES(?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../booking.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"ssss",$testimony,$patient,$profile,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location:../testimony.php?error=none");
   	exit();
   }
   //deposit
   function drbal($conn,$drid,$fees){

$sql="SELECT * FROM doctor WHERE id='$drid' ;";
$result=mysqli_query($conn,$sql);
$queryresult=mysqli_num_rows($result);


if ($queryresult>0) {
    while ($row=mysqli_fetch_assoc($result)) {
$_SESSION['drbal']=$row['bal'];
 $drbilled=$fees+$_SESSION['drbal'];
$sql="UPDATE doctor
SET bal=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
   	exit();
	}
	$user=$_SESSION['id'];
mysqli_stmt_bind_param($stmt,"ss",$drbilled,$drid);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
   header("location:../medico/booking-success.php?error=none");
   	exit();

    }
  }


   }
   function transaction($conn,$total){
$sql="UPDATE patient
SET bal=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
	$user=$_SESSION['id'];
mysqli_stmt_bind_param($stmt,"ss",$total,$user);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
$drid=$_SESSION['drid'];
$_SESSION['bal']=$total;
$fees=$_SESSION['drfee'];
drbal($conn,$drid,$fees);
   		header("location:../patient-profile.php?error=confirmed");
   	exit();

 }
 //upload this function books apts 
function aptbook($conn,$apttime){
	 
$drid=$_SESSION['drid'];
 $address=$_SESSION['caddress'];
  $patient=$_SESSION['username'];
   $numbers=$_SESSION['numbers'];
   $pid=$_SESSION['id'];
$drname=$_SESSION['drname'];
$date=$_SESSION['date'];
$services=$_SESSION['services'];
$stime=$_SESSION['starttime'];
$etime=$_SESSION['endtime'];
$profile=$_SESSION['profile'];
$dprofile=$_SESSION['dprofile'];
$booked="booked";
$addressed=$_SESSION['Address'];
$pdob=$_SESSION['dob'];
$pgender=$_SESSION['gendere'];
$fees=$_SESSION['drfee'];
$bal=$_SESSION['bal'];
$total=$bal-$fees;


	$sql="INSERT INTO bookedapt(drname,pname,pnumber,dated,services,timed,starttime,endtime,address,drid,pid,status,profile,dprofile,paddress,pdob,pgender) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../booking.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"sssssssssssssssss",$drname,$patient,$numbers,$date,$services,$apttime,$stime,$etime,$address,$drid,$pid,$booked,$profile,$dprofile,$addressed,$pdob,$pgender);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
transaction($conn,$total);
header("location:../booking-success.php?error=none");
   	exit();
   }



   	 
   	


 //upload apttime code this function uploads dr. available apts
  function createapttime($conn,$closetime,$starttime,$date,$fees){
session_start();
 $username=$_SESSION['username'];
$total='10';
 $drid=$_SESSION['id'];
 $gender=$_SESSION["gender"];
 $special=$_SESSION["specialization"];
 $service=$_SESSION["service"];
 $address=$_SESSION["Address"];
  $degree=$_SESSION["degree"];
   $profile=$_SESSION["profile"];

	$sql="INSERT INTO apttime(drname,dated,starttime,endtime,total,special,gender,service,address,degree,drid,profile,fees) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../available-timings.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"sssssssssssss",$username,$date,$closetime,$starttime,$total,$special,$gender,$service,$address,$degree,$drid,$profile,$fees);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
   		header("location:../available-timings.php?error=registered");
   	exit();

 }
   function contact($conn,$name,$email,$subject,$comment){


 

	$sql="INSERT INTO contactus(name,email,subject,comment) VALUES(?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../available-timings.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$subject,$comment);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
   		header("location:../contact-us.php?error=requested");
   	exit();

 }
 
 //home Section start

//home Section End
 //Settings Section Start
  //upload patient passchange code
 function passchange($conn,$pwd){


 session_start();
 $hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
 $username=$_SESSION['email'];
	$sql="UPDATE patient
SET password=?
WHERE email=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../Addride.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"ss",$hashedpwd,$username);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
   		header("location:../change-password.php?error=passchanged");
   	exit();



 }
  //upload dr. passchange code
  function drpasschange($conn,$pwd){


 session_start();
 $hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
 $username=$_SESSION['email'];
	$sql="UPDATE doctor
SET password=?
WHERE email=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../doctor-change-password.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"ss",$hashedpwd,$username);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
   		header("location:../doctor-change-password.php?error=passchanged");
   	exit();



 }
  //upload patient username change code
  function userchange($conn,$username){


 
session_start();
 $id=$_SESSION['id'];
 $_SESSION["username"]=$username;
	$sql="UPDATE patient
SET username=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$username,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../username.php?error=username");
   	exit();

 }
  //upload dr. username change code
  function druserchange($conn,$user){


 
session_start();
 $id=$_SESSION['id'];
 $_SESSION["username"]=$user;
	$sql="UPDATE doctor
SET username=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$user,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

   		header("location:../drusername.php?error=username");
   	exit();

 }
  //upload dr. apt cancel code
  function cancelapt($conn,$title){


 
session_start();
 $id=$title;
 $status="canceled";
	$sql="UPDATE bookedapt
SET status=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$status,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../appointments.php?error=canceled");
   	exit();

 }
 //upload dr. apt confirmed code
  function confirmedapt($conn,$title){


 
session_start();
 $id=$title;
 $status="confirmed";
	$sql="UPDATE bookedapt
SET status=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$status,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../appointments.php?error=confirmed");
   	exit();

 }


 
  //upload patient email check code
function emailExist($conn,$email){

	$sql="SELECT * FROM patient where email=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("location:../signup.php?error=esstmtfailed");
   	exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$email);
	mysqli_stmt_execute($stmt);
$resultData=mysqli_stmt_get_result($stmt);

if ($row=mysqli_fetch_assoc($resultData)) {
	return $row;
}
else{

	$result=false;
	return $result;
}
mysqli_stmt_close($stmt);

}
 //upload patient number check code
function numbersExist($conn,$numbers){

	$sql="SELECT * FROM patient where numbers=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("location:../signup.php?error=esstmtfailed");
   	exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$numbers);
	mysqli_stmt_execute($stmt);
$resultData=mysqli_stmt_get_result($stmt);

if ($row=mysqli_fetch_assoc($resultData)) {
	return $row;
}
else{

	$result=false;
	return $result;
}
mysqli_stmt_close($stmt);

}

 //upload patient email change code
 function emailchange($conn,$email){
session_start();
 $id=$_SESSION['id'];
	$sql="UPDATE patient
SET email=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$email,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
echo '<script>alert("Your email has been changed."); window.location.href="../newemail.php?error=emailchanged";</script>';

   	exit();



 }
 //upload dr. email change code
 function dremailchange($conn,$email){
session_start();
 $id=$_SESSION['id'];
	$sql="UPDATE doctor
SET email=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$email,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../drnewemail.php?error=emailchanged");
   	exit();



 }
  //upload patient number change code
  function numberchange($conn,$number){
session_start();
 $id=$_SESSION['id'];
	$sql="UPDATE patient
SET numbers=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$number,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../newemail.php?error=emailchanged");
   	exit();



 }
  //upload dr. number change code
 function drnumberchange($conn,$number){
session_start();
 $id=$_SESSION['id'];
	$sql="UPDATE doctor
SET numbers=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$number,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../drnewemail.php?error=emailchanged");
   	exit();



 }
   //patient address change code
   function addresschange($conn,$address){

session_start();
 $id=$_SESSION['id'];
 $_SESSION["Address"]=$address;
	$sql="UPDATE patient
SET address=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$address,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../address.php?error=addresschanged");
   	exit();



 }
 //upload patient profile code
 function getback($done){
if ($done="1") {
	header("location:../Medico/profile-settings.php?error=none");
}

 }
  function getbacked($done){
if ($done="1") {
	header("location:../Medico/doctor-profile-settings.php?error=none");
}

 }
 function uploadprofile($conn,$fileNameNew){

session_start();
 $id=$_SESSION['id'];
 $_SESSION["profile"]=$fileNameNew;
	$sql="UPDATE patient
SET profile=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$fileNameNew,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
$done="1"; 
   	getback($done);
   	exit();



 }
  //upload dr. license code

 function druploadlicense($conn,$lid,$ps,$lisd,$plo,$cf,$ls,$bd,$daily,$fileNameNew){

session_start();
 $id=$_SESSION['id'];
  $username=$_SESSION['username'];
	$sql="INSERT INTO drcred(drname,drid,lid,ps,lisd,plo,cf,ls,bd,daily,license) VALUES(?,?,?,?,?,?,?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../available-timings.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"sssssssssss",$username,$id,$lid,$ps,$lisd,$plo,$cf,$ls,$bd,$daily,$fileNameNew);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
   		header("location:../medico/license.php?error=registered");
   	exit();



 }
 //upload dr. license code

 function druploadcnic($conn,$fileNameNew,$name,$fname,$cnic){

session_start();
 $id=$_SESSION['id'];
  $username=$_SESSION['username'];
	$sql="INSERT INTO cnic(cnic,nicn,name,fname,drid) VALUES(?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../doctor-dashboard.php?error=stmtfailed");
   	exit();
	}
	
	mysqli_stmt_bind_param($stmt,"sssss",$fileNameNew,$name,$fname,$cnic,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
   		header("location:../doctor-dashboard.php?error=registered");
   	exit();



 }
 //upload dr. profile code

 function druploadprofile($conn,$fileNameNew){

session_start();
 $id=$_SESSION['id'];
 $_SESSION["profile"]=$fileNameNew;
	$sql="UPDATE doctor
SET profile=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$fileNameNew,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 $done="1";
   		getbacked($done);   
   			exit();



 }
 //upload patient bloodgroup code
    
 //submit
    function bloodgroup($conn,$bloodgroup){

session_start();
 $id=$_SESSION['id'];
	$sql="UPDATE patient
SET bloodgroup=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$bloodgroup,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../health.php?error=health");
   	exit();



 }
 //upload dr. address change code
   function draddresschange($conn,$address){

session_start();
 $id=$_SESSION['id'];
 $_SESSION["Address"]=$address;
	$sql="UPDATE doctor
SET address=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/settings.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$address,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 
   		header("location:../draddress.php?error=addresschanged");
   	exit();



 }
  //upload dr. specialization profile code
  function drspecialization($conn,$special,$service){

session_start();
 $id=$_SESSION['id'];

	$sql="UPDATE doctor
SET specialization=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/doctor-specialization.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$special,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

$sql1="UPDATE doctor
SET service=? WHERE id=?;";
	$stmt1=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt1,$sql1)) {
		header("location:../template/doctor-specialization.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt1,"ss",$service,$id);
	mysqli_stmt_execute($stmt1);
mysqli_stmt_close($stmt1);

 
   		header("location:../doctor-specialization.php?error=specialsaved");
   	exit();



 }
  //upload dr.education code
 function dreducation($conn,$degree,$inst,$yoc){

session_start();
 $id=$_SESSION['id'];
$_SESSION['degree']=$degree;

	$sql="UPDATE doctor
SET degree=? WHERE id=?;";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../template/doctor-specialization.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt,"ss",$degree,$id);
	mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

$sql1="UPDATE doctor
SET college=? WHERE id=?;";
	$stmt1=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt1,$sql1)) {
		header("location:../template/doctor-specialization.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt1,"ss",$inst,$id);
	mysqli_stmt_execute($stmt1);
mysqli_stmt_close($stmt1);
$sql2="UPDATE doctor
SET yearofc=? WHERE id=?;";
	$stmt2=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt2,$sql2)) {
		header("location:../template/doctor-specialization.php?error=stmtfailed");
   	exit();
	}
mysqli_stmt_bind_param($stmt2,"ss",$yoc,$id);
	mysqli_stmt_execute($stmt2);
mysqli_stmt_close($stmt2);


 
   		header("location:../doctor-specialization.php?error=saved");
   	exit();



 }


//Settings Section End
