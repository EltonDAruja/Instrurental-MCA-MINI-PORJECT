<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Musical Intruments</title>
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
               <h1>Sub Item View </h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6  ">
  
   
   
 
  <form action="itemchildaction.php" class="customform" method="post" enctype="multipart/form-data">
    <table>
      <tr><th>Item Code</th><td><input type="text" name="icode" value="<?php echo $_GET['id']; ?>"readonly></td></tr>
      <tr><th>Item Number</th><td><input type="text" name="ino"required></textarea></td></tr>
      <tr><th>Color</th><td><input type="text" name="color"required></textarea></td></tr>
      <tr><th>Condition</th><td><textarea name="condn" cols="20"required></textarea></td></tr>
	  <tr>
 <th>Upload an image</th><td><input type="file" name="file" id="file" required /></td>
</tr>
      <tr><th></th><td><input type="submit" value="ADD"></td></tr>  
   </table>
</form></div> <div class="s-12 l-6  ">
<table border="1">
  <tr>
  <th></th>
       <th>Item Code</th>
       <th>Item No</th>
       <th>Color</th>
       <th>Condition</th>
       <th>Action</th>

     
       

  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
          //  $s="SELECT tbl_itemchild.ino,tbl_itemchild.color,tbl_itemchild.condn,tbl_item.iname,tbl_item.idesc,tbl_item.ccode,tbl_item.bcode,tbl_item.vcode 
           // from tbl_item
            //JOIN tbl_itemchild 
            //ON tbl_item.icode=tbl_itemchild.icode";
			 $ic=$_GET['id'];
			 $s="SELECT * from tbl_itemchild where icode='$ic'";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
<tr>
<td><img src="<?php echo $row['imgpath'];?>" width="200px" height="50px"/></td>
  <td><?php echo $row['icode'];?></td>
  <td><?php echo $row['ino'];?></td>
  <td><?php echo $row['color'];?></td>
  <td><?php echo $row['condn'];?></td>
  <td><a href="edititemc.php?ino=<?php echo $row['ino'];?>" style="color:blue">Edit</a>|<a href="delitemc.php?ino=<?php echo $row['ino'];?>" style="color:red">Delete</a>


</tr>
<?php } ?>
</table></div>
                  
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






