<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$sname=$_GET['sname'];
$sadr=$_GET['sadr'];
$scity=$_GET['scity'];
$sstate=$_GET['sstate'];
$spincode=$_GET['spincode'];
$sphn=$_GET['sphn'];
$sem=$_GET['sem'];
$pass=$_GET['pass'];

$s="select * from tbl_staff where sem='$sem'";
$rt=$db->selectQuery($s);
if($rt==1)
{
	echo"<script> alert('Email Already Exists'); window.location='sregister.php'; </script>";
}
else{

$sql="INSERT into tbl_staff (sname,sadr,scity,sstate,spincode,sphn,sem) values ('$sname','$sadr','$scity','$sstate','$spincode','$sphn','$sem')";

$db->insertQuery($sql);
$s="select max(sid) as sid from tbl_staff";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
$sid=$row['sid'];
$ss="insert into tbl_login values($sid,'$sem','$pass','staff')";
$db->insertQuery($ss);
echo"<script> alert('success'); window.location='sregister.php'; </script>";
}
 ?>
