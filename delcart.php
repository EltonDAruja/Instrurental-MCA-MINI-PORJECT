<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$cid=$_GET['cid'];


$sql1="DELETE from tbl_cart where cid=$cid";


$db->insertQuery($sql1);


echo"<script> alert('success'); window.location='mycart.php'; </script>";
 ?>
