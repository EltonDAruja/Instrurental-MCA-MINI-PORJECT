<?php  session_start(); ?>

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

      <?php include('includes/custheader.php');?>

       <section>
         <div id="head">
            <div class="line">
               <h1>Cart Details</h1>
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
	       <th>Rent Amt(per day)</th>
		   <th>No of Days</th>
       <th>Action</th>


  </tr>
       <?php
    
			$uid=$_SESSION['uid'];
            $s="select * from tbl_cart where uid=$uid";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
			$s1="SELECT * from tbl_item inner join tbl_itemchild on tbl_itemchild.icode=tbl_item.icode where ino='".$row['ino']."'";
            $rs1=$db->selectData($s1);
            $row1=mysqli_fetch_array($rs1);
        ?>
<tr>
  <td><?php echo $row1['icode'];?></td>
  <td><?php echo $row1['iname'];?></td>
  <td><?php echo $row1['color'];?></td>
   <td><?php echo $row1['amt'];?></td>
   <td><?php echo $row['nod'];?></td>
  <td><a href="delcart.php?cid=<?php echo $row['cid'];?>" style="color:red">Remove</a> </td>
				
</tr>
<?php } ?>
</table> 
<br/>
<br/>
<form action="order.php">
<input type="hidden" name="uid"  value ="<?php echo $uid; ?>"/>

<input type="submit" style="background-color:#1f7c88;color:white; width:100px;height:30px;" value="Order Now"/>
</form>
<br/>
<br/><br><br><br><br>
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





