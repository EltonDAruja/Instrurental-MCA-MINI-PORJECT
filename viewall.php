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
         <div id="head">
            <div class="line">
               <h1>Search Here</h1>
			<center>
			   <form action="viewall.php">
			    <table style="background-color:black;color:white;width:200px;">
				<tr><td>
			   <select name="b" style="width:200px;height:25px">
			   <option value="0">Select Brand</option>
			     <?php
 
            $s="select * from tbl_brand";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
                  <option value="<?php echo $row['bcode'];?>"><?php echo $row['bname'];?></option>
			<?php } ?>
			   </select></td></tr>
			   <tr><td>
			    <select name="v" style="width:200px;height:25px">
			   <option value="0">Select Variety</option>
			     <?php
       
            $s="select * from tbl_Variety";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
                  <option value="<?php echo $row['vcode'];?>"><?php echo $row['vname'];?></option>
			<?php } ?>
			   </select>
            </td></tr>
			<tr><td>
			    <select name="c" style="width:200px;height:25px">
			   <option value="0">Select Category</option>
			     <?php
          
            $s="select * from tbl_catagory";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
                  <option value="<?php echo $row['ccode'];?>"><?php echo $row['cname'];?></option>
			<?php } ?>
			   </select>
           </td></tr><tr><td>
			   <input type="submit" value="SEARCH" style="width:200px;height:25px">
			   </td></tr></table>
			   </form>
			   </center>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
			   <?php
			   if($_GET['b']=="0" || $_GET['c']=="0" || $_GET['v']=="0"){
        $ss="SELECT * from tbl_item inner join tbl_brand on tbl_brand.bcode=tbl_item.bcode ";
			   }
			   else
			   {
				   $b=$_GET['b'];
				     $c=$_GET['c'];
					   $v=$_GET['v'];
          $ss="SELECT * from tbl_item inner join tbl_brand on tbl_brand.bcode=tbl_item.bcode where (tbl_item.bcode='$b' and ccode='$c' and vcode='$v')";
			  
			   }
			 //$s="SELECT * from tbl_item inner join tbl_itemchild on tbl_itemchild.icode=tbl_item.icode where vcode='".$_GET['bc']."'";
             $rt=$db->selectQuery($ss);
			if($rt==1){
			$rs=$db->selectData($ss);
            while($row=mysqli_fetch_array($rs)) { 
               
        ?>
                   <div class="s-12 m-6 l-4">
                <div class ="hover column"> <a href="uviewitem1.php?id=<?php echo $row['icode']; ?> ">
				    <figure><img src="<?php echo $row['img']; ?>" style="width:300px;height:200px" alt="This is a sample image"/></figure>  </div>
                       
                      <h4 class="subtitile">
                 <b><?php echo $row['bname']; ?></b> <?php echo $row['iname']; ?><br/>
                 <p>Rent/Day:&nbsp&nbsp<b>₹<?php echo $row['amt']; ?></b></p></a>
					 </a>
                      </h4>
                   </div>
			<?php } ?>
			<?php } else{ ?>
			<h1 style="color:black">No Items Found</h1>
			<br/>
			<br/><br/>
			<?php } ?>
               </div>
            </div>
			<br/>
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