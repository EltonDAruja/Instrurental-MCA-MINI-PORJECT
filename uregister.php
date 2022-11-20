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
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="index.html">Instru<br /><strong>Rental</strong></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                <li>
                          <a href="#"></a>
                        </li>
						 <li><a href="#"></a>
                          
                        </li>
                        <li>
                          <a href="index.html">Home</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="index.html">Instru<br /><strong>Rental</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                       
                       
						 <li>
                            <a href="ulogin.php">Login Here</a>
                        </li>
						 <li>
                            <a href="#"></a>
                        </li>
                        <li>
                           <a href="#"></a>
                        </li>
                        <!--<li><a href="contact.html">Contact</a>
                        </li>-->
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
       <section>
         <div id="head">
            <div class="line">
               <h1>Register Here</h1>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6 center">
                    <center>
  <form action="uregaction.php" class="customform" onsubmit="return check();">
    <table>
      <tr><th>Name</th><td><input type="text" name="name" id="name"required ></td></tr>
      <tr><th>Address</th><td><textarea name="adr" rows="2" cols="20" required ></textarea></td></tr>
      <tr><th>City</th><td><input type="text" name="city" id="name"required ></td></tr>
      <tr><th>State</th><td><input type="text" name="state" id="name"required ></td></tr>
      <tr><th>Pin Code</th><td><input type="text" name="pincode" required maxlength="6" ></td></tr>
      <tr><th>Phone</th><td><input type="text" name="phn" id="phn" required maxlength="10" ></td></tr>
      <tr><th>Email</th><td><input type="email" name="em" required ></td></tr>
      <tr><th>Password</th><td><input type="password" name="pass" required ></td></tr>
      <tr><th></th><td><input type="submit" value="Register"></td></tr>  
   </table>
</form></center>  </div>
                  
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
	  <script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    function check()
    {
        if(!document.getElementById("name").value.match(letters))
        {
              
            alert('Please input alphabet characters only,enter  name');
            return false;
        }
   
        else if(!document.getElementById("phn").value.match(numbers))
        {
            alert('Please input numeric characters only,enter phone number');
            return false;
        }
        else if(document.getElementById("phn").value.length<10)
        {
            alert('invalid Phone number,enter phone number');
            return false;
        }
 
        else
        {
            return true;
        }
    }

   
</script>

   </body>
</html>




