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
               <h1>Customer Details</h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-12 ">
  
     <!-- <form action="vregaction.php" class="customform">
    <table>
      <tr><th>Variety Code</th><th>Variety Name</th><th>Description</th><th></th></tr>
      
      <tr><td><input type="text" name="vcode" required></td><td><input type="text" name="vname" required></td>
	  <td><textarea name="vdesc" rows="3" cols="20" required></textarea></td>
	  <td><input type="submit" value="Add"></td></tr>
     
   </table>
</form> -->

<br/>
  <table border="1">
  <tr>
       <th>Reg ID</th>
       <th>Name</th>
       <th>Address</th>
       <th>City</th>
       <th>State</th>
       <th>Pin Code</th>
       <th>Phone</th>
       <th>Email</th>

  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s="select * from tbl_register";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
<tr>
  <td><?php echo $row['rid'];?></td>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['adr'];?></td>
  <td><?php echo $row['city'];?></td>
  <td><?php echo $row['state'];?></td>
  <td><?php echo $row['pincode'];?></td>
  <td><?php echo $row['phn'];?></td>
  <td><?php echo $row['em'];?></td>
</tr>
<?php } ?>
</table> </div>
                    <br><br><br><br><br><br><br><br><br><br><br>
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





