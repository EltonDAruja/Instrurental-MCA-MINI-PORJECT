<?php 

include('DatabaseCon.php'); $db=new DatabaseCon();

$ccode=$_GET['ccode'];
$cname=$_GET['cname'];
$cdesc=$_GET['cdesc']; 

$sql="UPDATE tbl_catagory set cname='$cname',cdesc='$cdesc' where ccode='$ccode'";

$db->InsertQuery($sql);

echo "<script>alert('success'); window.location='cregister.php';</script>";
?>