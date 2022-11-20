<?php
 include("DatabaseCon.php");
 $db=new DatabaseCon();
$oid=$_GET['oid'];

$adv=$_GET['tadv'];
$amt=$_GET['tamt'];

$bal=$_GET['bal'];


echo $s="update tbl_pay set bal=0,adv=$amt where oid=$oid";
$db->insertQuery($s);
echo $s="update tbl_orderm set pstatus='Full Paid' where oid=$oid";
$db->insertQuery($s);

echo "<script>alert('Payment Completed');window.location='vorders.php';</script>";


?>