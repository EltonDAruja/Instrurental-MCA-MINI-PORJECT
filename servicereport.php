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
               <h1>Items In for Service</h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-12 center ">
  
   

  <table border="1">
  <tr>
       <th>Image</th>
       <th>Item number</th>
       <th>Brand</th>
       <th>Item Name</th>
       <th>Condition</th>
       <th>Color</th>
       <th>Rent</th>

       

  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
          //  $s="SELECT tbl_itemchild.ino,tbl_itemchild.color,tbl_itemchild.condn,tbl_item.iname,tbl_item.idesc,tbl_item.ccode,tbl_item.bcode,tbl_item.vcode 
           // from tbl_item
            //JOIN tbl_itemchild 
            //ON tbl_item.icode=tbl_itemchild.icode";
          $s="SELECT * from tbl_item inner join tbl_itemchild on tbl_itemchild.icode=tbl_item.icode where condn='In for service'";
          
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        $b=$row['bcode'];
        $c=$row['ccode'];
        $v=$row['vcode'];
        $s2="SELECT * from tbl_brand where bcode='$b'";
        $rs2=$db->selectData($s2);
        $row2=mysqli_fetch_array($rs2);
        $s3="SELECT * from tbl_catagory where ccode='$c'";
        $rs3=$db->selectData($s3);
        $row3=mysqli_fetch_array($rs3);
        $s4="SELECT * from tbl_variety where vcode='$v'";
        $rs4=$db->selectData($s4);
        $row4=mysqli_fetch_array($rs4);
        ?>
<tr>
  <td><img src="<?php echo $row['imgpath'];?>" style=" width:100px "/></td>
  <td><?php echo $row['ino'];?></td>
  <td><?php echo $row2['bname'];?></td>
  <td><?php echo $row['iname'];?></td>
  <td><?php echo $row['condn'];?></td>
  <td><?php echo $row['color'];?></td>
  <td><?php echo $row['amt'];?></td>
 


<?php } ?>
</table></div>
                  
               </div>
            </div><br><br><br><br><br><br>
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

