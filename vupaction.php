<?php 

include('DatabaseCon.php'); $db=new DatabaseCon();

$vcode=$_GET['vcode'];
$vname=$_GET['vname'];
$vdesc=$_GET['vdesc']; 

$sql="UPDATE tbl_variety set vname='$vname',vdesc='$vdesc' where vcode='$vcode'";

$db->InsertQuery($sql);

echo "<script>alert('success'); window.location='vregister.php';</script>";

?>