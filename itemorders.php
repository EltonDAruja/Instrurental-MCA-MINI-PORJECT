<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>InstruRental</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>   
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
         
      <?php include('includes/header.php');?>

       <section>
         <div id="head">
            <div class="line">
               <h1>Order Details</h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-12 ">

  <table border="1">
  <tr>
       <th>Item Code</th>
       <th>Item Name</th>
       <th>Color</th>
	   
		<th>No of Days</th>
		<th>Issue Date</th>
		<th>Return Date</th>
     
<th>Action</th>
<th>Service</th>

  </tr>
       <?php
        include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s11="select * from tbl_orderm inner join tbl_orderc on tbl_orderm.oid=tbl_orderc.oid where tbl_orderm.oid=".$_GET['oid'];
            $rs11=$db->selectData($s11);
            while($rows=mysqli_fetch_array($rs11)) {
			$s1="SELECT * from tbl_item inner join tbl_itemchild on tbl_itemchild.icode=tbl_item.icode where ino='".$rows['ino']."'";
            $rs1=$db->selectData($s1);
            $row1=mysqli_fetch_array($rs1);
         $s2="SELECT * from tbl_pay where oid='".$rows['oid']."'";
            $rs2=$db->selectData($s2);
            $row2=mysqli_fetch_array($rs2);            
        ?>
<tr>
  <td><?php echo $row1['icode'];?></td>
  <td><?php echo $row1['iname'];?></td>
  <td><?php echo $row1['color'];?></td>

   <td><?php echo $rows['nod'];?></td>
   <td><?php echo $rows['idate'];?></td>
   <td><?php echo $rows['rdate'];?></td>
			<?php

         $flag=0;
  if($rows['idate']==NULL){
  
  ?>
	  <td>
  <a href="issue.php?oid=<?php echo $rows['oid'];?>&nod=<?php echo $rows['nod'];?>&ocid=<?php echo $rows['ocid'];?>" style="color:green">Issue</a>
  </td>	<td>-</td>
  <?php } else if($rows['rdate']!="0000-00-00" && $rows['status']=='issued'){ ?>	
  	  <td>
  <a href="return.php?oid=<?php echo $rows['oid'];?>&nod=<?php echo $rows['nod'];?>&ocid=<?php echo $rows['ocid'];?>" style="color:green">Return</a>
  </td><td>-</td>
  <?php } else if($rows['status']=='returned' && $row1['condn']!='In for service' && $rows['pstatus']!='Full Paid'){ ?>	
  	  <td>-</td>
       <td>
  <a href="serviceaction.php?ino=<?php echo $row1['ino'];?>&oid=<?php echo $rows['oid'];?>&trent=<?php echo $row2['trent'];?>" style="color:blue">Yes</a>/<a href="vorders" style="color:red">No</a>
  <?php $flag=1 ?>
  </td>
  <?php } 
    else {
    ?> <td>-</td>
       <td>-</td>

    <?php }?>
</tr>
<?php } ?>
</table> 
  
<br/>
<br/>
<br><br>
<br/>
<br/>
<br/>
<br/></div>
                  
               </div>
            </div>
         </div>
         <!-- MAP -->	
         
         
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2020, InstruRental
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="#" title="Responsee - lightweight responsive framework">All Rights Reserved.</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 
   </body>
</html>





