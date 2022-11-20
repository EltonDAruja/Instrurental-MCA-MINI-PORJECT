<?php
session_start();
 include("DatabaseCon.php");
 $db=new DatabaseCon();
$ino=$_GET['ino'];
$oid=$_GET['oid'];
$trent=$_GET['trent'];
$dam=$trent/5;
 $s1="update tbl_itemchild set condn='In for service' where ino='$ino'";
$db->insertQuery($s1);
 $s2="update tbl_pay set dam='$dam' where oid=$oid";
$db->insertQuery($s2);
echo "<script>alert('Listed item for servicing');window.location='vorders.php';</script>";
				  
?>