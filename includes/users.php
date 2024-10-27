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
     if (pwdMatch($pwd,$pwdrepeat)!==false) {
      header("location:../register.php?error=passwordsdontmatch");
      exit();
   }

   if (usernameExist($conn,$username,$number)!==false) {
        echo "<script>alert('email taken');</script>";

    echo "<script>setTimeout(function(){ window.location.href = '../register.php?error=scored'; }, 500);</script>";
      exit();
   }

   createuser($conn,$name,$username,$number,$pwd,$dob,$gender);
   if (empty_Input_Signup($name,$username,$number,$pwd,$pwdrepeat)!==false) {
      header("location:../signup.php?error=emptyinput");
      exit();
   }

   
 
	
}
else {

  header("location:../login.php");

}




