<?php
include_once 'dbh.inc.php'
?>
<?php
include_once 'functions.inc.php'
?>
<?php
$cnic=$_POST['cnic'];
$fname=$_POST['fname'];
$name=$_POST['name'];

if (isset($_POST['submit'])) {
	$file=$_FILES['file']; 
   $fileName=$_FILES['file']['name']; 
 $fileTmp=$_FILES['file']['tmp_name']; 
  $fileSize=$_FILES['file']['size']; 
 $fileError=$_FILES['file']['error']; 
 $fileType=$_FILES['file']['type']; 

 $fileExt=explode('.',$fileName);

 $fileActualExt=strtolower(end($fileExt));
 $allowed=array('jpg','jpeg','png');
 //file ext check
 if (in_array($fileActualExt,$allowed)) {
//checking error
 	if ($fileError===0) {
 		// size checking
 		if ($fileSize < 300000) {
 			$fileNameNew=uniqid('',true).".".$fileActualExt;
 			$fileDestination='../admin1/uploads/'.$fileNameNew;
move_uploaded_file($fileTmp,$fileDestination);
druploadcnic($conn,$fileNameNew,$name,$fname,$cnic);



 		
 		}
 		else{
	echo "cant upload error big file";

}

 	}

else{
	echo "cant upload error";

}
 	
 }
else{

echo "cant upload";

}
}


