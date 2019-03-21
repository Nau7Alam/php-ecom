<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

    
  
 
    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">
            
            
            <?php include "../resources/templates/front/sidebar.php";?>
            <!--            Side bar column-->
            
            <!-- Blog Entries Column -->
            
            <div class="col-md-10">
              
              <h2 class="text-primary">Related Products</h2>
              
               
          <?php get_category_product();  ?>
           
         
           
          </div>
            
              

        </div>
        <!-- /.row -->

        <hr>


        <ul class="pager">
        	
			
			
        </ul>

        

   

<?php include "../resources/templates/front/footer.php";?>
