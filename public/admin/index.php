<?php  require_once "../../resources/config.php"; ?>
<?php include "../../resources/templates/back/admin_header.php" ?>
   
    <div id="wrapper">



<?php

if(!isset($_SESSION['user_mode'])){
	
	direct("../index.php");
}


?>

        <!-- Navigation -->
 <?php include "../../resources/templates/back/admin_navigation.php" ?>
        
   
        <div id="page-wrapper">

            <div class="container-fluid">

               
               <?php
                
                  if($_SERVER['REQUEST_URI'] == "/ecom/public/admin/" || $_SERVER['REQUEST_URI'] == "/ecom/public/admin/index.php" ){
                
                 include "../../resources/templates/back/admin_content.php" ;
                
                }
                
               
                if(isset($_GET['orders'])){
                	
					include "../../resources/templates/back/orders.php" ;
					
                }

                if(isset($_GET['add_product'])){
                	
					include "../../resources/templates/back/add_product.php" ;
					
                }

                if(isset($_GET['edit_product'])){
                	
					include "../../resources/templates/back/edit_product.php" ;
					
                }

				if(isset($_GET['categories'])){

					include "../../resources/templates/back/categories.php" ;

				  }

				if(isset($_GET['products'])){

					include "../../resources/templates/back/products.php" ;

					}
		         if(isset($_GET['users'])){

					include "../../resources/templates/back/users.php" ;

					}
		        if(isset($_GET['add_users'])){

					include "../../resources/templates/back/add_users.php" ;

					}
		          if(isset($_GET['reports'])){

					include "../../resources/templates/back/reports.php" ;

					}

                ?>
                
       

  

            </div>
            <!-- /.container-fluid -->

        </div>
        
    
        <!-- /#page-wrapper -->
        
    <?php include "../../resources/templates/back/admin_footer.php" ?>
