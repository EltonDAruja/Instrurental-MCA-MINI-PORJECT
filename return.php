<?php
session_start();
 include("DatabaseCon.php");
 $db=new DatabaseCon();
$oid=$_GET['oid'];
$ocid=$_GET['ocid'];


 $s1="update tbl_orderc set status='returned' where ocid=$ocid";
$db->insertQuery($s1);

echo $s="select count(*) as cnt from tbl_orderc where oid=$oid and status='returned'";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
echo $icnt=$row['cnt'];

$s="select count(*) as cnt from tbl_orderc where oid=$oid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
echo $ocnt=$row['cnt'];

if($ocnt==$icnt)
{
$s="update tbl_orderm set ostatus='Returned' where oid=$oid";
$db->insertQuery($s);
}
	  $ut=$_SESSION['utype'];
				  if($ut=="staff"){
echo "<script>alert('Issued');window.location='vorders1.php';</script>";
				  }
				  else  if($ut=="admin"){
echo "<script>alert('Issued');window.location='vorders.php';</script>";
				  }
?>