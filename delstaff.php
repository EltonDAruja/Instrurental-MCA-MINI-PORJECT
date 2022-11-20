<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$sid=$_GET['sid'];

$sql="DELETE from tbl_staff where sid=('$sid')";

$db->insertQuery($sql);
echo"<script> alert('success'); window.location='sregister.php'; </script>";
 ?>
