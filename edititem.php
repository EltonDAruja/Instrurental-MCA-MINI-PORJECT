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
               <h1>Item Update</h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-8 center ">
  
    
     <form action="iupaction.php" class="customform">

     <?php
          include("DatabaseCon.php");
          $db=new DatabaseCon();
          $icode=$_GET['icode'];
          $s="SELECT * from tbl_item where icode=('$icode')";
          $rs=$db->selectData($s);
          $row=mysqli_fetch_array($rs);
          
     ?>    

    <table>
      <tr><th>Item Code</th><td><input type="text" name="icode" value="<?php echo $row['icode'];?>" readonly ></td></tr>
      <tr><th>Item Name</th><td><input type="text" name="iname" value="<?php echo $row['iname'];?>"required></textarea></td></tr>
      <tr><th>Description</th><td><textarea name="idesc" rows="5" cols="20" required><?php echo $row['idesc'];?></textarea></td></tr>
      <tr><th>Catagory</th>
          <td>
              <select name="ccode">
			  <?php
          
            $s2="select * from tbl_catagory";
            $rs2=$db->selectData($s2);
            while($row2=mysqli_fetch_array($rs2)) {
        ?>
                  <option value="<?php echo $row2['ccode'];?>"><?php echo $row2['cname'];?></option>
			<?php } ?>
              </select>
          </td>
      </tr>
      <tr><th>Variety</th>
          <td>
              <select name="vcode">
                 <?php
       
            $s3="select * from tbl_Variety";
            $rs3=$db->selectData($s3);
            while($row3=mysqli_fetch_array($rs3)) {
        ?>
                  <option value="<?php echo $row3['vcode'];?>"><?php echo $row3['vname'];?></option>
			<?php } ?>
              </select>
          </td>
      </tr>  
      <tr><th>Brand</th>
          <td>
              <select name="bcode">
                   <?php
       
            $s4="select * from tbl_brand";
            $rs4=$db->selectData($s4);
            while($row4=mysqli_fetch_array($rs4)) {
        ?>
                  <option value="<?php echo $row4['bcode'];?>"><?php echo $row4['bname'];?></option>
			<?php } ?>
              </select>
          </td>
      </tr>  
      <tr><th>Rent per Day</th><td><input type="text" name="amt" value="<?php echo $row['amt'];?>"></td></tr>
      <tr><td></td><td><input type="submit" value="Update"></td></tr>  
   </table>
</form>
 <br/>
 
</div>
                  
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





