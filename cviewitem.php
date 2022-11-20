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
.hover figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover figure:hover img {
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}
.hover figure img {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover figure:hover img {
	opacity: .6;
}
</style>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  

      <?php include('includes/custheader.php');?>

      <section>
       
			   <?php
        $s="SELECT * from tbl_item inner join tbl_brand on tbl_brand.bcode=tbl_item.bcode where ccode='".$_GET['bc']."'";
        $s2="SELECT * from tbl_catagory  where ccode='".$_GET['bc']."'";
        
        
			 //$s="SELECT * from tbl_item inner join tbl_itemchild on tbl_itemchild.icode=tbl_item.icode where vcode='".$_GET['bc']."'";
            $rs=$db->selectData($s);
            $rs2=$db->selectData($s2);
            $row2=mysqli_fetch_array($rs2);
?>
 <div id="head">
            <div class="line">
               <h1><?php echo $row2['cname']; ?> Instruments</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">

  <?php          
            while($row=mysqli_fetch_array($rs)) { 
        ?>  
                   <div class="s-12 m-6 l-4">
                   <div class ="hover column">	
                      <a href="uviewitem1.php?id=<?php echo $row['icode']; ?>">
                    				    <figure><img src="<?php echo $row['img']; ?>" style="width:300px;height:200px" alt="This is a sample image"/>  </figure></div>
                       
                        <h4 class="subtitile">
                 <b><?php echo $row['bname']; ?> </b><?php echo $row['iname']; ?><br/>
                 <p>Rent/Day:&nbsp&nbsp<b>₹<?php echo $row['amt']; ?></b></p></a>
					 </a>
                      </h4>
                   </div>
			<?php } ?>
               </div>
            </div>
			<br/><br><br><br><br>
         </div>
   
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