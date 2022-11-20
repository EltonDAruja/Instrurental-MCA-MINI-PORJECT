<?php
 include("DatabaseCon.php");
 $db=new DatabaseCon();
$ino=$_GET['ino'];
$vc=$_GET['vcode'];
$day=$_GET['day'];
$amt=$_GET['amt'];
$qty="1";
echo $trent=($day*$amt);
session_start();
$uid=$_SESSION['uid'];

echo $s="insert into tbl_cart(uid,ino,qty,nod,trent) values($uid,'$ino',$qty,$day,$trent)";
$db->insertQuery($s);
echo "<script>alert('Added to cart');window.location='uviewitem.php?bc=".$vc."';</script>";


?>