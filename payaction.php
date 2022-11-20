<?php
 include("DatabaseCon.php");
 $db=new DatabaseCon();
$oid=$_GET['oid'];

$adv=$_GET['tadv'];
$amt=$_GET['tamt'];

$bal=($amt-$adv);
session_start();
$uid=$_SESSION['uid'];

echo $s="insert into tbl_pay(oid,uid,trent,adv,bal) values($oid,$uid,$amt,$adv,$bal)";
$db->insertQuery($s);
echo $s="update tbl_orderm set pstatus='Adv Paid' where oid=$oid";
$db->insertQuery($s);
echo $s="update tbl_orderc set status='pending' where oid=$oid";
$db->insertQuery($s);
echo "<script>alert('Order Completed');window.location='myorders.php';</script>";


?>