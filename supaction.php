<?php 

include('DatabaseCon.php'); $db=new DatabaseCon();

$sid=$_GET['sid'];
$sname=$_GET['sname'];
$sadr=$_GET['sadr']; 
$scity=$_GET['scity']; 
$sstate=$_GET['sstate']; 
$spincode=$_GET['spincode']; 
$sphn=$_GET['sphn']; 
$sem=$_GET['sem'];
$upass=$_GET['upass'];

$sql="UPDATE tbl_staff set sname='$sname', sadr='$sadr', scity='$scity', sstate='$sstate', spincode='$spincode', sphn='$sphn', sem='$sem' where sid='$sid'";
$sql2="UPDATE tbl_login set uname='$sem',upass='$upass' where uid='$sid'";

$db->insertQuery($sql);
$db->insertQuery($sql2);

echo "<script>alert('Edited!!'); window.location='editstaff.php';</script>";
?>