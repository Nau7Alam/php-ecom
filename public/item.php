<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

   
    <style>
   	
	 

	img{
		height: 500px;

	}
	   
   </style>
    
 
    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">
            
            
            <?php include "../resources/templates/front/sidebar.php";?>
            <!--            Side bar column-->
            
            <!-- Blog Entries Column -->
            
            <div class="col-md-10">
               
               <?php
				
				$clean_id = escape_string($_GET['id']);
				
				$result = query("select * from products where product_id = '{$clean_id}'  ")	;
				
				conferm($result);
				
				while($row = fetch_array($result)) : ?>
           
             
              <div class="row">
              	
              	
              	<?php include "../resources/templates/front/item_slider.php"; ?>
             	    
             	  
              	
                 </div>
                 
                 <div class="col-md-6">
              	    <div class='caption details'>
						<h3>Product Rating</h3>
						<i class="fa fa-star fa-lg" style="color:gold"></i>
						<i class="fa fa-star fa-lg" style="color:gold"></i>
						<i class="fa fa-star fa-lg" style="color:gold"></i>
						<i class="fa fa-star fa-lg" style="color:gold"></i>
						<i class="fa fa-star-half fa-lg" style="color:gold"></i>
						<h4 style='font-weight:bold'>4.78</h4>
						
							<h3><?php echo $row['product_title']; ?> </h3>
							<hr>
							<h4 style="text-decoration:line-through;">M.R.P &#x20B9; <?php echo $row['product_price']+$row['product_price']*0.16; ?></h4><span class='label label-success'> Discount of 16%</span>
							<h3>Offer Price &#x20B9; <?php echo $row['product_price']; ?></h3>
							<h4>Save &#x20B9; <?php echo $row['product_price']*0.16; ?></h4>
							
							
							<p><?php echo $row['product_description']; ?></p>
							
							<a href='../resources/cart.php?add=<?php echo $row['product_id'] ?>' class='l'>Add to cart</a>
						</div>
              	
                 </div>
<!--
                 
                 <div class="col-md-12 details" style='margin-left:10px;'  >
                 	
                 	<div >
                 		<h3 class="text-success">Full Detailas</h3>
                 		<div>
                         <ul>
							<li>Lorem ipsum dolor sit amet, constetur adipisicing elit. Sapiente, animi!</li>
							<li>Molestias in iusto natur facilis delectus asperes assumenda eniet um.</li>
							<li>Sapiente ullam porro mollia voluptas autem veniam cotetur, commodi optio?</li>
							<li>Recusandae ea iure obcaecati exerciem a, architecto conuntur reprit rerum.</li>
							<li>Nostr reicieis autem id, eligendi tempore quas iure. Sint, iure!</li>
							<li>Ex cumque repellendus, maiores iure ad in aliquid laborum dolorum.</li>
                 		</ul>
                 		</div>
                 		
                 		
                 		
                 		
                 		
                 	</div>
                 	
                 </div>
-->
              	
              </div>
             
              
              
              <?php endwhile ; ?>
           
            </div>
            
              
                 <div class="col-md-10 col-md-offset-2">
             
                           	
                           	
                           	
					  <div class="col-md-10">
                         
                         
                          <a href="review.php?id=<?php echo $clean_id; ?>">  <h2>Write a Review <i class="fa fa-comment"></i></h2> </a>
                          
					      <h2>Reviews and Ratings </h2> 
                            
                           
                             <?php comment_show_function();  ?>

							<div class="row itemComment">

								<div class="col-md-2 text-center"> <i class="fa fa-user fa-3x itemIcon"></i> </div>
									<div class="col-md-7">
									   <h3>Lorem ipsum.</h3>
										<h4 style='color:gold'>4.5 <i class="fa fa-star" ></i> stars</h4>
									  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quisquam quidem odit, consequuntur obcaecati ipsam?</p>

									</div>

							</div>
							
							
						
					  </div>
              	
                 </div>
              
              
              
              
              

        </div>
        <!-- /.row -->

        <hr>


        

        

   

<?php include "../resources/templates/front/footer.php";?>
