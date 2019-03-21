<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

   
   <style>
   	
	  
	   
   </style>
    
 
    <!-- Page Content -->
    <div class="container-fluid" id="apple">

        <div class="row">
            
            
            <?php include "../resources/templates/front/sidebar.php";?>
            <!--            Side bar column-->
            
            <!-- Blog Entries Column -->
            
            <div class="col-md-10">
               
             <!-- First Page in SHOP -->
             
			<!--            slider page -->
             
             <?php include "../resources/templates/front/slider.php";?>
             
             <h2><?php//   echo $_SESSION[product_1];  ?></h2>
             
				<div class="row">
				     <?php  get_index_categories(); ?>


				</div>
            

            </div>
            
              

        </div>
        <!-- /.row -->

        <hr>


        

   

<?php include "../resources/templates/front/footer.php";?>
