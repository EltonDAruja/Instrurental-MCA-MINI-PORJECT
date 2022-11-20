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
               <h1>Staff Add</h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-8 center ">
  

     <form action="sregaction.php" class="customform" onsubmit="return check();">


    <table>
    
      <tr><th>Name</th><td><input type="text" name="sname" id="sname"required ></td></tr>
      <tr><th>Address</th><td><textarea name="sadr" rows="5" cols="20" required ></textarea></td></tr>
      <tr><th>City</th><td><input type="text" name="scity" id="sname"required ></td></tr>
      <tr><th>State</th><td><input type="text" name="sstate" id="sname"required ></td></tr>   
      <tr><th>Pin Code</th><td><input type="text" name="spincode" id="sphn" required maxlength="6" ></td></tr>
      <tr><th>Phone</th><td><input type="text" name="sphn" id="sphn" required maxlength="10" ></td></tr>
      <tr><th>Email</th><td><input type="email" name="sem" required ></td></tr>
      <tr><th>Password</th><td><input type="password" name="pass" required ></td></tr>
      <tr><th></th><td><input type="submit" value="Register"></td></tr>  
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





