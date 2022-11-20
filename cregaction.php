<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$ccode=$_GET['ccode'];
$cname=$_GET['cname'];
$cdesc=$_GET['cdesc'];

$s="select * from tbl_catagory where ccode='$ccode' or cname='$cname'";
$rt=$db->selectQuery($s);
if($rt==1)
{
	echo"<script> alert('Already Exists'); window.location='cregister.php'; </script>";
}
else{
$sql="INSERT into tbl_catagory (ccode,cname,cdesc) values ('$ccode','$cname','$cdesc')";

$db->insertQuery($sql);

echo"<script> alert('success'); window.location='cregister.php'; </script>";
}
 ?>
