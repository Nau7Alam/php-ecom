 <div class="container-fluid ">
			 <div class="col-md-12" style='margin-left:-20px;' >
				<div class="row">

					  <div class="col-md-3 col-xs-4">
						 <a class="" href="index.php" style="font-family:arial;padding:5px 14px;background-color:#68bf3f;font-style:oblique; color:white; font-size:260%">Nau7Shop</a>
					  </div>


				   <div class="col-md-6 col-xs-12">
					   <div >

						<form action="search.php" method="post" class="searchForm">

								<input type="text" class="searchBox" name="key" placeholder="Search here..">

								<input type="submit" value="SEARCH" name="search" class="searchButton">

					   </form>


					   </div>	

					</div>

					 <div class="col-md-2 col-xs-8">
						<?php echo menu_state();  ?>
					 </div>


					<div class="col-md-1 col-xs-4">

							<li class='cart'>
							<a href="checkout.php" class='' style="color:#68bf3f;font-size:160%;" >
							<i class='fa fa-shopping-cart fa-lg' style=''></i>
								<sup>

									<?php 
										if(isset($_SESSION['total_items']))
										 {
											 echo $_SESSION['total_items'];

										}else{
											echo "0";
										}
									?>

								 </sup>
								 </a>
						    </li> 


						</div>

					</div>
				 </div>  

             
               
           
           
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" >HOME</a>
            </div>
            
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  
                 <li>
                        <a href="shop.php">SHOP</a>
                    </li>
                  
                                 
                     <li>
                        <a href="checkout.php">CHECKOUT</a>
                    </li>
                                 
                     <li>
                        <a href="contact.php">CONTACT</a>
                    </li> 
                                 
                                     
                     <li>
                        <a href="admin">ADMIN</a>
                    </li>
                       
                        
                    
           
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>