<?php
include_once 'includes/dbh.inc.php'
?>
<?php
include_once 'includes/functions.inc.php'
?>
<?php

if (isset($_POST['submit'])) {
        $skilled=$_POST['skill']; 
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
 			$fileDestination='upload/'.$fileNameNew;
move_uploaded_file($fileTmp,$fileDestination);

uploadskill($conn,$fileNameNew,$skilled);


 		
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
$fileNameNew=' ';
uploadskill($conn,$fileNameNew,$skilled);
}
}

