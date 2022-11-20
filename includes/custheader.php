<header>
           <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="index.html">Instru<br /><strong>Rental</strong></a>
                  </div>                  
                  <p class="nav-text">MENU</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                 <li>
                          <a href="userhome.php">Home</a>
                        </li>
						  <li>
                          <a href="editcust.php">Edit Profile</a>
                        </li>
			           <li>
                           <a>Intruments</a>			    
						   
						   <ul>
						    <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
  
			 $s1="SELECT * from tbl_variety ";
            $rs1=$db->selectData($s1);
            while($row1=mysqli_fetch_array($rs1)) {
        ?>
                              <li><a href="uviewitem.php?bc=<?php echo $row1['vcode']; ?>"><?php echo $row1['vname']; ?></a>
                              </li>
                          
            <?php } ?>  </ul>
            <li><a href="viewall.php?b=0&v=0&c=0">Filter</a></li>
            <!-- <img src="img/search.png" style="width:25px;"> -->
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
                            <a href="mycart.php">My Cart</a>
                        </li>
						 <li>
                            <a href="myorders.php">My Orders</a>
                        </li>
                        <li>
                           <a href="index.html">About Us</a>
                        </li>
                        <li>
                           <a href="index.html">Logout</a>
                        </li>
                        
                        <!--<li><a href="contact.html">Contact</a>
                        </li>-->
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>