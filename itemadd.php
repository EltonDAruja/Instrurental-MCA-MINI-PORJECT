<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>IntruRental</title>
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
               <h1>Item Entry </h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-8 center ">
  
   
   
  <form action="itemaction.php" class="customform" method="post" enctype="multipart/form-data">
    <table>
      <tr><th>Item Code</th><td><input type="text" name="icode" required ></td></tr>
      <tr><th>Item Name</th><td><input type="text" name="iname" required></textarea></td></tr>
      <tr><th>Description</th><td><textarea name="idesc" rows="5" cols="20" required></textarea></td></tr>
      <tr><th>Catagory</th>
          <td>
              <select name="ccode">
			  <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s="select * from tbl_catagory";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
                  <option value="<?php echo $row['ccode'];?>"><?php echo $row['cname'];?></option>
			<?php } ?>
              </select>
          </td>
      </tr>
      <tr><th>Variety</th>
          <td>
              <select name="vcode">
                 <?php
       
            $s="select * from tbl_Variety";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
                  <option value="<?php echo $row['vcode'];?>"><?php echo $row['vname'];?></option>
			<?php } ?>
              </select>
          </td>
      </tr>  
      <tr><th>Brand</th>
          <td>
              <select name="bcode">
                   <?php
       
            $s="select * from tbl_brand";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
                  <option value="<?php echo $row['bcode'];?>"><?php echo $row['bname'];?></option>
			<?php } ?>
              </select>
          </td>
      </tr>  
      <tr><th>Rent per Day</th><td><input type="text" name="amt"></td></tr>
	  <tr>
 <th>Upload an image</th><td><input type="file" name="file" id="file" required /></td>
</tr>
      <tr><td></td><td><input type="submit" value="ADD"></td></tr>  
   </table>
</form></div>
                  
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



