<?php
 //upload dr.signup (registration) panel
if (isset($_POST['submit'])) {

      $name=$_POST["username"];
   $username=$_POST["email"];
   $number=$_POST["number"];
   $pwd=$_POST["password"];
   $pwdrepeat=$_POST["cpassword"];
   $dob=$_POST["dob"];
   $gender=$_POST["Gender"];
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   if (empty_Input_Signup($name,$username,$number,$pwd,$pwdrepeat)!==false) {
      header("location:../signup.php?error=emptyinput");
      exit();
   }

   
   if (pwdMatch($pwd,$pwdrepeat)!==false) {
      header("location:../signup.php?error=passwordsdontmatch");
      exit();
   }

   if (drusernameExist($conn,$username,$number)!==false) {
  echo "<script>alert('email taken');</script>";
 echo "<script>setTimeout(function(){ window.location.href = '../register.php?error=scored'; }, 500);</script>";
         exit();
   }
   createdr($conn,$name,$username,$number,$pwd,$dob,$gender);
	
}
else {

  header("location:../login.php");

}




