<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$bcode=$_GET['bcode'];


$sql1="DELETE from tbl_brand where bcode=('$bcode')";
$sql2="DELETE from tbl_itemchild where icode in(SELECT icode from tbl_item where bcode=('$bcode'))";
$sql3="DELETE from tbl_item where bcode=('$bcode')";

$db->insertQuery($sql1);
$db->insertQuery($sql2);
$db->insertQuery($sql3);

echo"<script> alert('success'); window.location='bregister.php'; </script>";
 ?>
