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
               <h1>Staff Details</h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-12 ">
  
     <form action="sregaction.php" class="customform">
     <form action="sregaction.php" class="customform" onsubmit="return check();">


    <table>
      <tr><th>Staff ID</th><td><input type="text" name="sid" id="sid"required ></td></tr>
      <tr><th>Name</th><td><input type="text" name="sname" id="sname"required ></td></tr>
      <tr><th>Address</th><td><textarea name="sadr" rows="5" cols="20" required ></textarea></td></tr>
      <tr><th>phone</th><td><input type="text" name="sphn" id="sphn" required maxlength="10" ></td></tr>
      <tr><th>Email</th><td><input type="email" name="sem" required ></td></tr>
      <tr><th>Password</th><td><input type="password" name="pass" required ></td></tr>
      <tr><th></th><td><input type="submit" value="Register"></td></tr>  
   </table>


</form>
</form> <br/>
  <table border="1">
  <tr>
       <th>Staff ID</th>
       <th>Name</th>
       <th>Address</th>
       <th>phone</th>
       <th>Email</th>

  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s="select * from tbl_staff";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
<tr>
  <td><?php echo $row['sid'];?></td>
  <td><?php echo $row['sname'];?></td>
  <td><?php echo $row['sadr'];?></td>
  <td><?php echo $row['sphn'];?></td>
  <td><?php echo $row['sem'];?></td>
 

</tr>
<?php } ?>
</table> </div>
                  
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





