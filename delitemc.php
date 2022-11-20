<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$ino=$_GET['ino'];

$sql2="SELECT icode from tbl_itemchild where ino=('$ino')";
$sql="DELETE from tbl_itemchild where ino=('$ino')";

$rs=$db->selectData($sql2);
$row=mysqli_fetch_row($rs);
$db->insertQuery($sql);


echo"<script> alert('success'); window.location='itemchildadd.php?id=$row[0]';</script>";
 ?>
