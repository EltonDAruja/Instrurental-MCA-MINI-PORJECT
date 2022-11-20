<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$vcode=$_GET['vcode'];


$sql1="DELETE from tbl_variety where vcode=('$vcode')";
$sql2="DELETE from tbl_itemchild where icode in(SELECT icode from tbl_item where vcode=('$vcode'))";
$sql3="DELETE from tbl_item where vcode=('$vcode')";

$db->insertQuery($sql1);
$db->insertQuery($sql2);
$db->insertQuery($sql3);

echo"<script> alert('success'); window.location='vregister.php'; </script>";
 ?>
