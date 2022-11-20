<?php

include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();

$un=$_GET['uname'];
$up=$_GET['upass'];
$s="select * from tbl_login where uname='$un' and upass='$up'";
$rt=$db->selectQuery($s);
if($rt==1)
{
	$rs=$db->selectData($s);
	$row=mysqli_fetch_array($rs);
	$_SESSION['uid']=$row['uid'];
	$_SESSION['utype']=$row['utype'];
	$ut=$row['utype'];
	if($ut=="admin")
	{
	echo "<script>alert('Login success!Welcome Admin!');window.location='adminhome.php';</script>";	
		
	}
	else if($ut=="user")
	{
	echo "<script>alert('Login success!Welcome User!');window.location='userhome.php';</script>";	
		
	}
	else if($ut=="staff")
	{
	echo "<script>alert('Login success!Welcome Staff!');window.location='staffhome.php';</script>";	
		
	}
	else
	{
	echo "<script>alert('Login Failed!');window.location='index.html';</script>";	
		
	}
}
else
	{
	echo "<script>alert('Login Failed!');window.location='index.html';</script>";	
		
	}
?>
