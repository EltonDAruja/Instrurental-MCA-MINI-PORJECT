<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$name=$_GET['name'];
$adr=$_GET['adr'];
$city=$_GET['city'];
$state=$_GET['state'];
$pincode=$_GET['pincode'];
$phn=$_GET['phn'];
$em=$_GET['em'];
$pass=$_GET['pass'];

$s="select * from tbl_register where em='$em'";
$rt=$db->selectQuery($s);
if($rt==1)
{
	echo"<script> alert('Email Already Exists'); window.location='uregister.php'; </script>";
}
else{

$sql="INSERT into tbl_register (name,adr,city,state,pincode,phn,em) values ('$name','$adr','$city','$state','$pincode','$phn','$em')";

$db->insertQuery($sql);
$s="select max(rid) as uid from tbl_register";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
$uid=$row['uid'];
$ss="insert into tbl_login values($uid,'$em','$pass','user')";
$db->insertQuery($ss);
echo"<script> alert('success'); window.location='ulogin.php'; </script>";
}
 ?>
