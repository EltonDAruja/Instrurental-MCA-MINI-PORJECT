<header>
             <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="index.html">Instru<br /><strong>Rental</strong></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
				  <?php
				  session_start();
				  $ut=$_SESSION['utype'];
				  if($ut=="staff"){
				?>

<div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                 <li>
                          <a href="staffhome.php">Home</a>
                        </li>
						 <li>
                          <a>Reports</a>
						   <ul>
						  <li><a href="reports.php">Order Reports</a></li>
						  </ul>
                        </li>
                        <li>
                          <a href="editstaff.php">Profile</a>
                        </li>
                        
					
                  <li>
                          <a href="custview.php">Customers</a>
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
                           <a>Item Tags</a>			    
                           <ul>
                               <li>
                          <a href="cregister.php">Catagory</a>
                        </li>
						 <li><a href="bregister.php">Brand</a>
                          
                        </li>
                        <li>
                          <a href="vregister.php">Variety</a>
                        </li>
						   
                           </ul>
                        </li>
                        
					
						 <li>
                            <a>Items</a>
                            
                             <ul>
                               <li>
                          <a href="viewitem.php">View &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>
							 <li>
                            <a href="itemadd.php">Add &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>
                        <li>
                            <a href="services.php">Service&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>  

                           </ul>
                           <li>
                            <a href="vorders.php">Orders</a>
                        </li>
                        </li>
                        <li>
                           <a href="index.html">Logout</a>
                        </li>
                        <!--<li><a href="contact.html">Contact</a>
                        </li>-->
                     </ul> 
                  </div>
				  <?php } else  if($ut=="admin"){?>				
				 <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                     <li>
                          <a href="adminhome.php">Home</a>
                        </li>
						  <li><a>Reports</a>
						  
                    <ul>
						  <li><a href="reports.php">Order Reports</a></li>
	                 
						  <li><a href="sreport.php">Staff Reports</a></li>

                    <li><a href="custrep.php">Customer Reports</a></li>
						  </ul>
                    
                    </li>
                 <li>
                          <a href="custview.php">Customers</a>
                        </li>
						<li>
                           <a>Staff</a>			    
                        <ul>
						<li>
                          <a href="staffadd.php">Staff Entry</a>
                        </li>
						<li>
                          <a href="sregister.php">Staff View</a>
                        </li>
						</ul>
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
                           <a>Item tags</a>			    
                           <ul>
                               <li>
                          <a href="cregister.php">Catagory</a>
                        </li>
						 <li><a href="bregister.php">Brand</a>
                          
                        </li>
                        <li>
                          <a href="vregister.php">Variety</a>
                        </li>
						   
                           </ul>
                        </li>
                       
					
						 <li>
                            <a>Items</a>
                            <ul>
                       <li>
                            <a href="viewitem.php">View &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>       
							 <li>
                            <a href="itemadd.php">Add &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>
                        <li>
                            <a href="services.php">Service&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>  

						   
                           </ul>
                        </li>
						 <li>
                            <a href="vorders.php">Orders</a>
                        </li>
                        <li>
                           <a href="index.html">Logout</a>
                        </li>
                        <!--<li><a href="contact.html">Contact</a>
                        </li>-->
                     </ul> 
                  </div>
				   <?php } ?>
               </div>
            </div>
         </nav>
      </header>