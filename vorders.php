

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
       <th>Odate</th>
	   <th>Customer</th>
	   <th>Customer Address</th>
	   <th>Contact no</th>
       <th>Total Qty</th>
       <th>Total Rent</th>
	   <th>Amount Paid</th>
	<th>Balance</th>
	  <th>Order Status</th>
	  <th>Pay Status</th>
	<th>Items Ordered</th>
	
     


  </tr>
       <?php
	       include("DatabaseCon.php");
            $db=new DatabaseCon();
  

			$uid=$_SESSION['uid'];
            $s="select * from tbl_orderm inner join tbl_register on tbl_register.rid=tbl_orderm.uid inner join tbl_pay on tbl_pay.oid=tbl_orderm.oid order by tbl_orderm.oid desc";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
			        ?>
<tr>
<td><?php echo $row['odate'];?></td>
<td><?php echo $row['name'];?></td>
  <td><?php echo $row['adr'];?></td>
  <td><?php echo $row['phn'];?></td>
  <td><?php echo $row['tqty'];?></td>
  <td><?php echo $row['trent'];?></td>
  <td><?php echo $row['adv'];?></td>

   <td><?php echo $row['bal'];?></td>
   <td><?php echo $row['ostatus'];?></td>
   <td><?php echo $row['pstatus'];?></td>
  <td>
  <a href="itemorders.php?oid=<?php echo $row['oid'];?>" style="color:blue">View Items</a>
  </td>
    <?php
  if($row['pstatus']=="Adv Paid" && $row['ostatus']=="Returned" ){
  
  ?>
	 <td>
  <a href="retpay1.php?oid=<?php echo $row['oid'];?>" style="color:red">Balance Pay</a>
  </td>
  <?php } ?>
</tr>
<?php } ?>
</table> 
  
<br/>
<br/>

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





