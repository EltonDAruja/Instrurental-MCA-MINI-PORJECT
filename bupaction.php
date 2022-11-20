<?php 

include('DatabaseCon.php'); $db=new DatabaseCon();

$bcode=$_GET['bcode'];
$bname=$_GET['bname'];
$bdesc=$_GET['bdesc']; 

$sql="UPDATE tbl_brand set bname='$bname',bdesc='$bdesc' where bcode='$bcode'";

$db->InsertQuery($sql);

echo "<script>alert('success'); window.location='bregister.php';</script>";
?>