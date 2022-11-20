<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$bcode=$_GET['bcode'];
$bname=$_GET['bname'];
$bdesc=$_GET['bdesc'];

$s="select * from tbl_brand where bcode='$bcode' or bname='$bname'";
$rt=$db->selectQuery($s);
if($rt==1)
{
	echo"<script> alert('Already Exists'); window.location='bregister.php'; </script>";
}
else{
$sql="INSERT into tbl_brand (bcode,bname,bdesc) values ('$bcode','$bname','$bdesc')";

$db->insertQuery($sql);

// echo"<script> alert('success'); window.location='bregister.php'; </script>";
}
 ?>
