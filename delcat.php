<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$ccode=$_GET['ccode'];


$sql1="DELETE from tbl_catagory where ccode=('$ccode')";
$sql2="DELETE from tbl_itemchild where icode in(SELECT icode from tbl_item where ccode=('$ccode'))";
$sql3="DELETE from tbl_item where ccode=('$ccode')";

$db->insertQuery($sql1);
$db->insertQuery($sql2);
$db->insertQuery($sql3);

echo"<script> alert('success'); window.location='cregister.php'; </script>";
 ?>
