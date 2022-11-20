<?php
include("DatabaseCon.php");
$db=new DatabaseCon();

$uid=$_GET['uid'];
// $nod=$_GET['day'];

$s1="select count(*) as cnt from tbl_cart where uid=$uid";
$rs1=$db->selectData($s1);
$row1=mysqli_fetch_array($rs1);
$tqty=$row1['cnt'];
///////
$s1="select sum(trent) as rnt from tbl_cart where uid=$uid";
$rs1=$db->selectData($s1);
$row1=mysqli_fetch_array($rs1);
$tamt=$row1['rnt'];

////////////////
$odate=Date('Y-m-d');
$sql="insert into tbl_orderm(odate,uid,tqty,trent,ostatus,pstatus) values ('$odate',$uid,$tqty,0,'pending','pending')";
$db->insertQuery($sql);
///////////////////
$ss="select max(oid) as oid from tbl_orderm";
$rss=$db->selectData($ss);
$rw=mysqli_fetch_array($rss);
$oid=$rw['oid'];
///////////////////
$s="select * from tbl_cart where uid=$uid";
$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
	$ino=$row['ino'];
	$nod=$row['nod'];
	//$s1="SELECT * from tbl_item inner join tbl_itemchild on tbl_itemchild.icode=tbl_item.icode where ino='".$ino."'";
         //   $rs1=$db->selectData($s1);
          //  $row1=mysqli_fetch_array($rs1);
			//$tamt+=$row1['amt']*$nod;
			
$sql1="insert into tbl_orderc(oid,ino,qty,nod) values($oid,'$ino',1,$nod)";
$db->insertQuery($sql1);
$sql2="delete from tbl_cart where uid=$uid and ino='$ino'";
$db->insertQuery($sql2);
}

$s="update tbl_orderm set trent=$tamt where oid=$oid";
$db->insertQuery($s);
 	echo"<script> alert('success'); window.location='pay.php?oid=".$oid."'; </script>";
 ?>
