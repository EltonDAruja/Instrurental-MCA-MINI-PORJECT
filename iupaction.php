<?php 

include('DatabaseCon.php'); $db=new DatabaseCon();

$icode=$_GET['icode'];
$iname=$_GET['iname'];
$idesc=$_GET['idesc']; 
$ccode=$_GET['ccode'];
$vcode=$_GET['vcode'];
$bcode=$_GET['bcode'];
$amt=$_GET['amt'];



$sql="UPDATE tbl_item set iname='$iname',idesc='$idesc',ccode='$ccode',bcode='$bcode',vcode='$vcode',amt='$amt' where icode='$icode'";

$db->InsertQuery($sql);

echo "<script>alert('success'); window.location='viewitem.php';</script>";
?>