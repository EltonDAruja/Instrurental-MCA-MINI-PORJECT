<?php
session_start();
 include("DatabaseCon.php");
 $db=new DatabaseCon();
$ino=$_GET['ino'];

 $s1="update tbl_itemchild set condn='Great' where ino='$ino'";
$db->insertQuery($s1);

echo "<script>alert('Service Complete');window.location='services.php';</script>";
				  
?>