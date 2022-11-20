<?php 

include('DatabaseCon.php'); $db=new DatabaseCon();

$icode=$_GET['icode'];
$ino=$_GET['ino'];
$color=$_GET['color']; 
$condn=$_GET['condn'];

$sql="UPDATE tbl_itemchild set ino='$ino',color='$color',condn='$condn' where ino='$ino'";

$db->InsertQuery($sql);

echo "<script>alert('success'); window.location='viewitemc.php?id=$icode';</script>";
?>