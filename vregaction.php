<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$vcode=$_GET['vcode'];
$vname=$_GET['vname'];
$vdesc=$_GET['vdesc'];

$s="select * from tbl_variety where vcode='$vcode' or vname='$vname";
$rt=$db->selectQuery($s);
if($rt==1)
{
	echo"<script> alert('Email Already Exists'); window.location='vregister.php'; </script>";
}
else{

$sql="INSERT into tbl_variety (vcode,vname,vdesc) values ('$vcode','$vname','$vdesc')";

$db->insertQuery($sql);

echo"<script> alert('success'); window.location='vregister.php'; </script>";
}
 ?>
