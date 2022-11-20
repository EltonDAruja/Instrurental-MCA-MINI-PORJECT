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
      <style> 
input[type=submit], input[type=submit], input[type=reset] {
  background-color: #00464f;
  border: none;
  color: white;
  padding: 12px 28px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  

      <?php include('includes/custheader.php');?>

       <section>
         <div id="head">
            <div class="line">
               <h1>Product Detail</h1>
            </div>
         </div>
		 
          <div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6">
				   <?php
        
			 $s="SELECT * from tbl_item inner join tbl_itemchild on tbl_itemchild.icode=tbl_item.icode where ino='".$_GET['id']."'";
            $rs=$db->selectData($s);
            $row=mysqli_fetch_array($rs);
            $i=$row['icode'];
            $s2="SELECT * from tbl_item inner join tbl_brand on tbl_brand.bcode=tbl_item.bcode where icode='$i'";
            $rs2=$db->selectData($s2);
            $row2=mysqli_fetch_array($rs2);
        ?>
                     <h2 style="font-size:40px;"><?php echo $row2['bname']; ?> <b><?php echo $row['iname']; ?></b> </h2>
                     <address>
                        <br>
                        <p style="font-size:20px;"><b>Item Description :</b></p>
                        <p><?php echo $row['idesc']; ?></p></br>
                        <p style="font-size:20px;"><b>Color :</b></p>
                       <p><?php echo $row['color']; ?></p><br>
					      <!-- <p><i class="icon-arrow_big_right icon"></i><b>Condition:-</b> <?php echo $row['condn']; ?></p> -->
                     <p style="font-size:20px;"><b>Rent Per Day :</b></p>
						  <p><?php echo $row['amt']; ?>/day</p>
                     </address>
                     <br />
                     <h4 style="font-size:22px;"><b>Tags :</b></h4>
					 <?php
					 $s1="select * from tbl_catagory where ccode='".$row['ccode']."'";
					 $r1=$db->selectData($s1);
					 $rw1=mysqli_fetch_array($r1);
					 ?>
                      <a href="cviewitem.php?bc=<?php echo $rw1['ccode']; ?>">#<?php echo $rw1['cname']; ?>
					   <?php
					 $s2="select * from tbl_brand where bcode='".$row['bcode']."'";
					 $r2=$db->selectData($s2);
					 $rw2=mysqli_fetch_array($r2);
					 ?>
					<a href="bviewitem.php?bc=<?php echo $rw2['bcode']; ?>">#<?php echo $rw2['bname']; ?></a>
					<?php
					 $s1="select * from tbl_Variety where vcode='".$row['vcode']."'";
					 $r1=$db->selectData($s1);
					 $rw1=mysqli_fetch_array($r1);
					 ?>
               <a href="uviewitem.php?bc=<?php echo $rw1['vcode']; ?>">#<?php echo $rw1['vname']; ?></a>    </div>
                  <div class="s-12 l-6">
                     
                     				    <img src="<?php echo $row['imgpath']; ?>" style="width:500px;height:300px" alt="This is a sample image"/>  
                       
                      
<form action="cartaction.php">
<input type="hidden" name="amt"  value ="<?php echo $row['amt']; ?>"/>
<input type="hidden" name="ino"  value ="<?php echo $row['ino']; ?>"/>
<input type="hidden" name="vcode"  value ="<?php echo $row['vcode']; ?>"/>

<center><p style="font-size: 20px">Number of Days : <input type="number" min="1" value="1"name="day" style="width:40px; height:35px "/> </p><br>
<input type="submit" value="Add to Cart 🛒"/></center>
		  <!-- <img src="img/cart.png" style="width:50px;"> -->
</form>			
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





