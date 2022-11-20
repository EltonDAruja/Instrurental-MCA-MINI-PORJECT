<?php 

include('DatabaseCon.php'); $db=new DatabaseCon();

$sid=$_GET['sid'];
$sname=$_GET['sname'];
$sadr=$_GET['sadr']; 
$city=$_GET['city'];
$state=$_GET['state'];
$pincode=$_GET['pincode'];
$sphn=$_GET['sphn']; 
$sem=$_GET['sem'];
$upass=$_GET['upass'];

$sql="UPDATE tbl_register set name='$sname', adr='$sadr', city='$city', state='$state', pincode='$pincode', phn='$sphn', em='$sem' where rid='$sid'";
$sql2="UPDATE tbl_login set uname='$sem',upass='$upass' where uid='$sid'";

$db->insertQuery($sql);
$db->insertQuery($sql2);

echo "<script>alert('Edited!!'); window.location='editcust.php';</script>";
?>