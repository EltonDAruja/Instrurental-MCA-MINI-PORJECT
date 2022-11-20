<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$icode=$_POST['icode'];
$ino=$_POST['ino'];
$color=$_POST['color'];
$condn=$_POST['condn'];




$target_dir = "cuploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$s="select * from tbl_itemchild where ino='$ino'";
$rt=$db->selectQuery($s);
if($rt==1)
{
	echo"<script> alert('Already Exists'); window.location='itemchildadd.php?id=".$icode."'; </script>";
}
else{
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	  
	$sql="INSERT into tbl_itemchild (icode,ino,color,condn,imgpath) values ('$icode','$ino','$color','$condn','$target_file')";

$db->insertQuery($sql);

echo"<script> alert('success'); window.location='itemchildadd.php?id=".$icode."'; </script>";


  }
  else
	  {
  echo "<script>alert('Sorry, there was an error uploading your file.');window.location='itemchildadd.php?id=".$icode."'; </script>";
  }
}

}
 ?>
