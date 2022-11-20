<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$icode=$_GET['icode'];

$sql1="DELETE from tbl_item where icode=('$icode')";
$sql2="DELETE from tbl_itemchild where icode=('$icode')";

$db->insertQuery($sql1);
$db->insertQuery($sql2);

echo"<script> alert('success'); window.location='viewitem.php'; </script>";
 ?>
