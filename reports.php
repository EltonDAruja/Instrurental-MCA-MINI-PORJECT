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
input[type=button], input[type=submit], input[type=reset] {
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

      <?php include('includes/header.php');?>

       <section>
         <div id="head">
            <div class="line">
               <h1>Order Reports</h1>
			   <center>
		
			   <form action="reports.php" onsubmit="return check()">
			  <table style="background-color:black;color:white;width:500px;"><tr>
<th>			  From</th><td><input type="date" name="d1" id="d1" value="d1"/></td>
			  <th> To</th><td><input type="date" name="d2" id="d2" value="d2"/></td>
			   <td><input type="submit" value="SHOW"/></td></tr></table>
			   </form>
			   </center>
            </div>
         </div>
		 
         <div id="content" >
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-12 ">
  <script>
  
  d1=getElementById("d1");
  echo d1;

  </script>
     
  <table border="1">
  <tr>
       <th>Odate</th>
	   <th>Customer</th>
	   <th>Customer Address</th>
	   <th>Contact no</th>
       <th>Total Qty</th>
       <th>Total Rent</th>
	   <th>Amount Paid</th>
	<th>Balance</th>
	  <th>Order Status</th>
	  <th>Pay Status</th>
	<th>Items Ordered</th>


  </tr>
       <?php
      

	       include("DatabaseCon.php");
            $db=new DatabaseCon();
           
  if(isset($_GET['d1']) && isset($_GET['d1'])){
            $s="select * from tbl_orderm inner join tbl_register on tbl_register.rid=tbl_orderm.uid inner join tbl_pay on tbl_pay.oid=tbl_orderm.oid where odate between '".$_GET['d1']."' and '".$_GET['d2']."'";
  }

else{
   $s="select * from tbl_orderm inner join tbl_register on tbl_register.rid=tbl_orderm.uid inner join tbl_pay on tbl_pay.oid=tbl_orderm.oid ";
}	
			
			$rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
			        ?>
<tr>
<td><?php echo $row['odate'];?></td>
<td><?php echo $row['name'];?></td>
  <td><?php echo $row['adr'];?></td>
  <td><?php echo $row['phn'];?></td>
  <td><?php echo $row['tqty'];?></td>
  <td><?php echo $row['trent'];?></td>
  <td><?php echo $row['adv'];?></td>

   <td><?php echo $row['bal'];?></td>
   <td><?php echo $row['ostatus'];?></td>
   <td><?php echo $row['pstatus'];?></td>
  <td>
  <a href="itemorders1.php?oid=<?php echo $row['oid'];?>" style="color:blue">View Items</a>
  </td>
  
</tr>
<?php } ?>
</table> 


  
<br/>
<br/>
<input type="button" value="Print 🖨️" onclick="window.print()">
<br/>
<br/>
<br/>
<br/></div>
                  
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
    var from=getElementById("d1"); 
    var to=getElementById("d2");
    var one_day=1000*60*60*24;
    var diff_in_days=math.floor(to-from)/one_day);
   
    var days_since_last_reset= diff_in_days%14;
    function check()
    {   alert('Insert proper dates');
        if(diff_in_days)s
        {
            alert('Insert proper dates');
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







